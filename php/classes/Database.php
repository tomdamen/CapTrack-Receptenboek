<?php

class Database {

    private $user;
    private $pass;
    private $location;
    private $databaseName;
    public $database;
    public $allTitlesQuery;
    public $idQuery;


    public function __construct(){

    $this->user = "root";
    $this->pass = "";
    $this->location = "localhost";
    $this->databaseName = "recipebook";


    $this->database = new PDO('mysql:host=localhost;dbname=recipebook',$this->user,$this->pass);
    }


    public function getDatabase() {
        return $this->database;
    }

    public function queryTitles() {
        $allTitlesQuery = $this->database->query('SELECT id,title FROM recipes');
        return $allTitlesQuery->fetchAll();
    }

    public function queryById($id) {
        $idQuery = $this->database->query("SELECT * FROM recipes WHERE id=$id");
        return $idQuery->fetchAll();
    }




}