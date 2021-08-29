<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function helloWorld(){
        return view('hello-world');

    }

    //definindo o valor 'Romulo' como padrão para o $name, caso o campo n seja inserido
    public function hello($name = 'Romulo'):string{
        return 'Hello, ' . $name;
    }
}
