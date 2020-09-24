<?php
// Connection to database

namespace Future\Core;

class DBConnect
{
    private $link;

    public function __construct() {
        $link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME); 
        mysqli_set_charset($link, 'utf8');

        $this->link = $link;
    }

    public function getConnection() {
        return $this->link;
    }
}