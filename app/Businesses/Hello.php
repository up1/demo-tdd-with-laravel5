<?php

namespace App\Businesses;

class Hello
{
    public function makeResult($name)
    {
        return "Hello, ". $name;
    }
}