<?php

namespace Tests\Unit;

use App\car;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UnitTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_Update()
    {
        $user = User::find(1);
        $user->name = 'Steve Smith';
        $this->assertTrue($user->save());
    }
    public function test_Delete()
    {
        $user = new  User();
        $user->name = "Kaka";
        $user->email = "Chodu@gmail.com";
        $user->password = 'ping';
        $user->save();
        $this->assertTrue($user->delete());
    }
    public function test_Count()
    {
        $user = User::all();
        $recordsCount = $user->count();
        $this->assertEquals(50, $recordsCount);
    }
    public function test_Insert()
    {
        $user = new User();
        $user->name = "Dhawal Jayesh Shah";
        $user->email = "djshah@gmail.com";
        $user->password = "123456";
        $this->assertTrue($user->save());
    }
    public function test_UpdateCar()
    {
        $car = car::find(1);
        $car->year = '2000';
        $this->assertTrue($car->save());
    }
    public function test_DeleteCar()
    {
        $cars= new car();
        $cars->make = 'Honda';
        $cars->model = 'City';
        $cars->year = '2009';
        $cars->save();
        $this->assertTrue($cars->delete());
    }
    public function test_CountCar()
    {
        $cars = car::all();
        $carRecordsCount = $cars->count();
        $this->assertEquals(50,$carRecordsCount);
    }

    public function test_InsertCar()
    {
        $cars= new car();
        $cars->make = 'Honda';
        $cars->model = 'City';
        $cars->year = '2009';
        $this->assertTrue($cars->save());
    }

}
