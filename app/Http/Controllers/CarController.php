<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function look()
    {
        $car = Car::find(1);
        dump($car->brand,$car->model,$car->year,$car->horsepower);
        $car2 = Car::find(2);
        dump($car2->brand,$car2->model,$car2->year,$car2->horsepower);
        $car3 = Car::find(3);
        dump($car3->brand,$car3->model,$car3->year,$car3->horsepower);
    }
}
