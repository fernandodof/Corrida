<?php
if (!session_id()) {
    session_start();

    if (isset($_SESSION['id'])) {
        header('Location: ../pages/dashboard');
    }
}

include_once '../pages/header.php';

$smarty->display('../templates/index.tpl');