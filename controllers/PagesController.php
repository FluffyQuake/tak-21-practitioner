<?php

class PagesController {

    public function home () {

        return view('index');        

    }

    public function about () {

        return view('about', ['company' =>'Kuressaare Ametikool']);

    }

    public function contact () {

        return view('contact');
        
    }
    
    public function aboutculture () {

        return view('aboutculture');

    }
}