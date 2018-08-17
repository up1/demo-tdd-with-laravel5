<?php

namespace App\Http\Controllers;

class HelloController extends Controller
{
    public function say($name)
    {
        return view('hello', ['message' => "Hello, ". $name]);
    }
}