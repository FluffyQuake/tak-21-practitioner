<?php

namespace App\Controllers;

class TasksController {

    public function index() {

        
        $tasks = App::get('database')->selectAll('tasks');

        return view('tasks',['tasks' => $tasks]);
    }
    
    public function store() {

        App::get('database')->insert('tasks',[

            'desctription' => $_POST['description'],
            
        ]);

        return redirect('tasks');
    }
}
