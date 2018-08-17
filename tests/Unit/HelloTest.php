<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Businesses\Hello;

class HelloTest extends TestCase
{
    /** @test */
    public function makeResult_somkiat_Hello_somkiat()
    {
        $hello = new Hello();
        $this->assertEquals('Hello, somkiat', 
                            $hello->makeResult('somkiat'));
    }
}
