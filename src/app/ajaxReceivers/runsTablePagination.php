<?php
require_once '../model/persistence/Dao.class.php';
require_once '../util/Queries.php';
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
$runs = $dao->getListResultOfNamedQueryWithParametersAndLimit(Queries::GET_RUNS_BY_RUNNER_ID, $params, filter_input(INPUT_POST, 'iDisplayStart'), filter_input(INPUT_POST, 'iDisplayLength'));

foreach ($runs as $key => $value) {
    $runs[$key]['date'] = strftime('%A, %d de %B de %Y', $runs[$key]['date']->getTimeStamp());
    $runs[$key]['duration'] = TimeFunctions::secondsToTime(intval($runs[$key]['duration']));
    $runs[$key]['avgSpeed'].= ' Km/h';
    $runs[$key]['pace'] .= ' min/Km';
    $runs[$key]['distance'].= ' Km';
}

ChromePhp::log($runs);

$runCount = $dao->getSingleResultOfNamedQueryWithParameters(Queries::GET_RUN_COUNT, $params);
$output = array(
    "sEcho" => filter_input(INPUT_POST, 'sEcho'),
    "iTotalRecords" => intval($runCount[1]),
    "iTotalDisplayRecords" => intval($runCount[1]),
    "aaData" => $runs
);

$response = json_encode($output);
echo $response;