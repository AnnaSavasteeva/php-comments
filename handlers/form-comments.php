<?php

if (isset($_POST['submit'])) {
    $author = $_POST['author'];
    $author = textInput($author);

    $message = $_POST['comment'];
    $message = textInput($message);

    $query = "INSERT INTO `comments`
        (
            `id`,
            `author`,
            `message`,
            `date`,
            `time`
        )
        VALUES (
            NULL,
            '{$author}',
            '{$message}',
            DATE_FORMAT(CURRENT_DATE, '%d.%m.%Y'),
            TIME_FORMAT(CURRENT_TIME, '%H:%i')
        )
    ";
    $new_comment = mysqli_query($db, $query);

    header("Location: " . $_SERVER["REQUEST_URI"]);
    exit;
}
