<?php

class AboutController {
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            
        }
        include '../app/views/about/edit.php';
    }

    public function index() {
       
        include '../app/views/about/index.php';
    }
    
    public function update() {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            
        }
        include '../app/views/about/edit.php';
    }

    public function delete() {
        include '../app/views/about/edit.php';
    }
}

