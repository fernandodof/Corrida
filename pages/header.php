<?php

require_once 'smartyHeader.php';

if (!session_id()) {
    session_start();
}

$smarty->display('../templates/header.tpl');
