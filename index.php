<?php

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