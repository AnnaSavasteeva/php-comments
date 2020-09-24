<?php

function textInput($data) {
    $data = trim($data);
    $data = htmlspecialchars($data);

    return $data;
}
