<?php

$router->get('','PagesController@home');
$router->get('about','PagesController@about');
$router->get('contact','PagesController@contact');
$router->get('about/culture','PagesController@aboutculture');
$router->get('tasks','TasksController@index');

$router->post('task','TasksController@store');


// $router->post('task','controllers/add-task.php');