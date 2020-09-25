<?php
// Parent class

namespace Future\Core;

abstract class Entity implements \Future\Interfaces\EntityGetters
{
    private $table;
    private $id;
    private $data;


    // Possibility to select data by id
    public function __construct($id = null) {
        $this->id = $id;
    }


    // Database table
    protected function setTable() {
        return $this->table;
    }


    // Select all id from table
    public function getId($order = 'ASC', $limit = null) {
        $connect = new \Future\Core\DBConnect();
        $link = $connect->getConnection();

        $query = "SELECT `id`
            FROM {$this->setTable()}
            ORDER BY `id` {$order}"
            . ($limit ? " LIMIT {$limit}" : '');
        $result = mysqli_query($link, $query);

        mysqli_close($link);
        
        return $result;
    }


    // Select data by id and put them to $data
    private function getData(){
        $connect = new \Future\Core\DBConnect();
        $link = $connect->getConnection();

        $query = "SELECT * FROM " . $this->setTable() . " WHERE id=" . $this->id;
        $result = mysqli_query($link, $query);
        $row = mysqli_fetch_assoc($result);

        $this->data = $row;

        mysqli_close($link);
    }


    // Get field from table
    public function getField($field) {
        if (!$this->data) {
            $this->getData();
        }

        return $this->data[$field];
    }

}