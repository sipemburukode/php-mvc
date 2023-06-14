<?php

class TaskModel {
    public $mysql;
    public function __construct(){
        $this->mysql = require '../config/database.php';
    }

    public function get($id) {
       return "getUser " . $id;
    }

    public function save($data) {
        $sql = 'INSERT INTO todo(task) VALUES(:task)';

        $statement = $this->mysql->prepare($sql);
        return $statement->execute([':task' => $data]);
    }
}
