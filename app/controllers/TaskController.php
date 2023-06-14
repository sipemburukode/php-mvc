<?php
require '../app/models/TaskModel.php';

class TaskController {
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            
        }
        include '../app/views/task/edit.php';
    }

    public function index() {
        include '../app/views/task/index.php';
    }
    
    public function update() {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if ($_POST['task']) {
                $task = new TaskModel;
                $dump = $task->save($_POST['task']);
                if ($dump) echo "berhasil di update";
            }
        }

        include '../app/views/task/edit.php';
    }

    public function delete() {
        include '../app/views/task/edit.php';
    }
}

