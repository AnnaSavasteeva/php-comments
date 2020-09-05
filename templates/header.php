<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/configs/configs.php'); ?>

<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title><?= $title ?></title>
    <link href='https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap' rel='stylesheet'>
    <link rel='stylesheet' href='/styles/main.css'>
</head>

<body>

    <header>
        <div class='header-wrapper'>
            <h1><?= $title ?></h1>
            <div class='contacts'>
                <p>Телефон: <?= $company['phone'] ?></p>
                <p>Email: <span class='underline'><?= $company['email'] ?></span></p>
            </div>
            <img src='<?= $company['logo'] ?>' alt='Логотип Future Internet agency' class='logo-header'>
        </div>
    </header>

    <main class='main-content-wrapper'>