<?php
require_once '../model/persistence/Dao.class.php';
require_once '../util/Queries.php';
require_once '../util/Queries_Builders.php';
require_once '../util/TimeFunctions.php';


include '../util/ChromePHP.php';
ChromePhp::log($_POST);
ChromePhp::log(filter_input(INPUT_POST, 'iDisplayStart'));
ChromePhp::log(filter_input(INPUT_POST, 'iDisplayLength'));

session_start();
setlocale(LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese');

date_default_timezone_set('America/Fortaleza');

$dao = new Dao();

$params['id'] = $_SESSION['id'];
$criteria = getOrderCollumn(filter_input(INPUT_POST, 'iSortCol_0'));
$extraOrderBy[$criteria] = filter_input(INPUT_POST, 'sSortDir_0');

ChromePhp::log($extraOrderBy);

$runs = $dao->getListResultOfQueryBuilderWithParametersAndLimit(Queries_Builders::get_runs_by_runner_id_builder(), $params, 
        filter_input(INPUT_POST, 'iDisplayStart'), filter_input(INPUT_POST, 'iDisplayLength'), $extraOrderBy);

foreach ($runs as $key => $value) {
    $runs[$key]['date'] = strftime('%A, %d de %B de %Y', $runs[$key]['date']->getTimeStamp());
    $runs[$key]['duration'] = TimeFunctions::secondsToTime(intval($runs[$key]['duration']));
    $runs[$key]['avgSpeed'].= ' Km/h';
    $runs[$key]['pace'] .= ' min/Km';
    $runs[$key]['distance'].= ' Km';
    $runs[$key]['notesId'] = $runs[$key]['notes'].'|'.$runs[$key]['id'];
}

ChromePhp::log($runs);

$runCount = $dao->getSingleResultOfNamedQueryWithParameters(Queries::GET_RUN_COUNT, $params);
$output = array(
    "sEcho" => filter_input(INPUT_POST, 'sEcho'),
    "iTotalRecords" => intval($runCount[1]),
    "iTotalDisplayRecords" => intval($runCount[1]),
    "aaData" => $runs
);

function getOrderCollumn($colNumber){
    $column = 'r.date';
    switch ($colNumber){
        case 1:
            $column = 'r.distance';
            break;
        case 2:
            $column = 'r.duration';
            break;
        case 3:
            $column = 'r.avgSpeed';
            break;
        case 4:
            $column = 'r.pace';
            break;
    }
    return $column;
}

$response = json_encode($output);
echo $response;