<?php

function get_connect($host, $user, $password, $db_name)
{
    static $connect;

    if (null === $connect) {
    $connect = mysqli_connect($host, $user, $password, $db_name)
        or die('Ошибка подключения к базе данных' . mysqli_error($connect));
    }

    return $connect;
}


function get_all_data($db, $select, $from)
{
    $query = "SELECT $select FROM $from";
    $result = mysqli_query($db, $query);

    return $result;
}


function get_limited_data($db, $select, $from, $order='DESC', $limit=3)
{
    $query = "SELECT $select FROM $from ORDER BY `id` $order LIMIT $limit";
    $result = mysqli_query($db, $query);

    return $result;
}


function textInput($data) {
    $data = trim($data);
    $data = htmlspecialchars($data);

    return $data;
}
