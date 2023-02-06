<?php

$names = ['Tere', 'Priit', 'Egert', 'kris', 'Gen', 'Karl', 'Fred'];

$lessthanfive = array_filter($names, function($name){
    return strlen($name) <= 3;
});


$caps = array_map(function ($element){
    return strtoupper($element);
}, $names);

var_dump($lessthanfive);
var_dump($caps);