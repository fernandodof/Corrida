<?php

include_once '../pages/dashboardMenu.php';
require_once '../src/app/model/persistence/Dao.class.php';
require_once '../src/app/util/Queries_Builders.php';
require_once '../src/app/util/TimeFunctions.php';

$dao = new Dao();

if (!session_id()) {
    session_start();
}

$params['id'] = $_SESSION['id'];
$summary = $dao->getListResultOfQueryBuilderWithParameters(Queries_Builders::get_runs_summary(), $params)[0];


$summary['totalTime'] = TimeFunctions::secondsToTime($summary['totalTime']);
$summary['totalDistance'].= ' Km';

$smarty->assign('summary', $summary);
$smarty->display('../templates/dashboard.tpl');
