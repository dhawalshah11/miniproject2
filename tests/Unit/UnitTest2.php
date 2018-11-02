<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UnitTest2 extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car= new Cars();
        $car->make = 'Honda';
        $car->model = 'City';
        $car->year = '2009';
        $this->assertTrue($car->save());
    }
    public function UpdateCarTest()
    {
        $car = Cars::find(1);
        $car->year = '2000';
        $this->assertTrue($car->save());
    }
}
