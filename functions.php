<?php
function connectToDb () {
    $charset ="utf8mb4";

    $dsn = "mysql:host=$host;dbname=$db";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    try{
        return new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $passwd);
    } catch (\PDOException $e){
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
}

function fetchAllTasks ($pdo) {
    
    $stmt = $pdo->prepare('SELECT * FROM tasks;');
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_CLASS, 'Task');

}