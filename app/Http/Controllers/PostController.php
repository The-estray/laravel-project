<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() 
    {
        $post = Post::find(1);
        dd($post->likes);
    }

    public function cars()
    {
        $car1 = Car::find(1);
        dump($car1->brand,$car1->model,$car1->year);
    }
   
}
