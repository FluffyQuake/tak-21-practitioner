<?php

namespace App\Controllers;

use App\Core\App;

class PostsController {
    
    public function posts() {

        $posts = App::get('database')->selectAll('posts');

        return view('posts',['posts' => $posts]);

    }

    public function post() {

        App::get('database')->insert('posts',[

            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'time' => $_POST['time'],
            
        ]);

        return redirect('posts');
    }
}