<?php

require_once '../model/persistence/Dao.class.php';
require_once '../util/Queries.php';
require_once '../util/EncryptPassword.php';

$dao = new Dao();

switch (filter_input(INPUT_POST, 'type')) {
    case 'runner':
        $emailLogin = filter_input(INPUT_POST, 'emailLogin');
        $passwordLogin = filter_input(INPUT_POST, 'passwordLogin');
        $params['password'] = EncryptPassword::encrypt($passwordLogin);

        $runner = null;
        $isValid = true;
        if (isEmail($emailLogin)) {
            $params['email'] = $emailLogin;
            $runner = $dao->getSingleResultOfNamedQueryWithParameters(Queries::LOGIN_WITH_EMAIl, $params);
        } else {
            $params['login'] = $emailLogin;
            $runner = $dao->getSingleResultOfNamedQueryWithParameters(Queries::LOGIN_WITH_LOGIN, $params);
        }

        if ($runner == null) {
            $isValid = false;
        } else {
            session_start();
            session_destroy();
            session_start();
            $_SESSION['id'] = $runner->getId();
            $_SESSION['name'] = $runner->getName();
            $_SESSION['login'] = $runner->getLogin();
            $_SESSION['email'] = $runner->getEmail();
        }
        echo $isValid;
        break;
}

function isEmail($str) {
    if (filter_var($str, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}
