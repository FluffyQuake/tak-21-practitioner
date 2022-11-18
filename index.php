<?php

$host = "d110077.mysql.zonevs.eu";
$db = "d110077_todo";
$user = "d110077sa421004";
$passwd = "";

$dsn = "mysql:host=$host;dbname=$db";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try{
    $pdo = new PDO($dsn, $user, $passwd);
} catch (\PDOException $e){
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
die();

class Task {
    public $description;
    protected $is_completed = false;

    public function __construct ($desc) {
        
        $this->description = $desc;
    }

    public function complete () {

        $this->is_completed = true;

    }

    public function isComplete () {

        return $this->is_completed;
    }
}
$tasks = [
    new Task('Täita Tahvlis päevik'),
    new Task('Poest leiba ja piima'),
    new Task('Sõbrale tere öelda'),
];

$tasks[0]->complete();

require_once('index.view.php');