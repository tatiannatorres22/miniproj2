<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;


class CarYearIntegerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        #$car = factory(Car::class)->create();
        $car =  Car::first();
        #dd($car);
        $this->assertTrue(is_string($car->year));
    }
}
