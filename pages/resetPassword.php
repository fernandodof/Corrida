<?php

require_once '../src/app/model/persistence/Dao.class.php';
require_once '../src/app/util/Queries.php';

$slashCount = substr_count(filter_input(INPUT_SERVER, 'REQUEST_URI'), '/');
if ($slashCount < 4) {
    header("Location: ../404");
}

list(,,,, $code) = explode('/', filter_input(INPUT_SERVER, 'REQUEST_URI'));

$dao = new Dao();

$params['code'] = $code;
$recover = $dao->getArrayResultOfNativeQueryWithParameters(Queries::GET_RUNNER_ID_CODE_BY_PASSWORD_CODE, $params);

if (!$recover) {
    header("Location: ../404");
}

include_once '../pages/header.php';

$smarty->assign('code', $code);
$smarty->display('../templates/resetPassword.tpl');
