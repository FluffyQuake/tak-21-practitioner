<?php

namespace App\Controllers;

use App\Core\App;

class TasksController {

    public function index() {

        
        $tasks = App::get('database')->selectAll('tasks');

        return view('tasks',['tasks' => $tasks]);
    }
    
    public function store() {

        App::get('database')->insert('tasks',[

            'description' => $_POST['description'],
            
        ]);

        return redirect('tasks');
    }
}
