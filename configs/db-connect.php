<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');

$db = get_connect($host, $user, $password, $db_name);
mysqli_set_charset($db, 'utf8');
unset($host, $user, $password, $db_name);
