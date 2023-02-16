<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


Use App\Core\App;
Use App\Core\Database\{QueryBuilder, Connection};

App::bind('config', require_once('config.php'));

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

function view ( $name, $data = [] ) {

    extract($data);

    return require_once("views/{$name}.view.php");
    
}

function redirect($path) {

   header('Location: /{$path}');
}