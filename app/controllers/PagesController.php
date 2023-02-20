<?php

namespace App\Controllers;

class PagesController {

    public function home () {

        return view('index');        

    }

    public function about () {

        return view('about', ['company' =>'Kure Kool']);

    }

    public function contact () {

        return view('contact');
        
    }
    
    public function aboutculture () {

        return view('aboutculture');

    }
}