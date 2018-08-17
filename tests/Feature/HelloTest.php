<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HelloTest extends TestCase
{
    /** @test */
    public function should_say_hello()
    {
        $response = $this->get('/hello/somkiat');
        $response->assertStatus(200);
        $response->assertSeeText("Hello, somkiat");
    }
}
