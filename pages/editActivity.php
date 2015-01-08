<?php

if (!session_id()) {
    session_start();

    if (!isset($_SESSION['id'])) {
        header('Location: ../index');
    }
}

$slashCount = substr_count(filter_input(INPUT_SERVER, 'REQUEST_URI'), '/');
if ($slashCount < 4) {
    header("Location: ../dashboard");
}

list(,,,, $runId) = explode('/', filter_input(INPUT_SERVER, 'REQUEST_URI'));

require_once '../src/app/model/persistence/Dao.class.php';
require_once '../src/app/util/Queries.php';

$dao = new Dao();

$params['runid'] = $runId;
$params['runnerid'] = $_SESSION['id'];

$run = $dao->getSingleResultOfNamedQueryWithParameters(Queries::GET_RUN_BY_RUNNER_ID_RUN_ID, $params);

if ($run == null) {
    header('Location: ../index');
}

include_once '../pages/dashboardMenu.php';

$smarty->assign('runDate', date('d/m/Y', $run->getDate()->getTimestamp()));
$smarty->assign('run', $run);
$smarty->display('../templates/editActivity.tpl');
