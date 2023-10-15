<?php

class Connection{
    public $stm;

    public function db_connect()
    {
        try {
            $this->stm = new PDO('mysql:host=localhost;dbname=example_php_form','root','');
        } catch (PDOException $err) {
            echo 'Error connecting to database: ' . $err->getMessage();
        }
    }

}


?>