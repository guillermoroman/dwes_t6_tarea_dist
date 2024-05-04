<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;

class DishController extends Controller
{
    public function index()
    {
        $dishes = Dish::orderBy('price')->get();
        return view('dishes.index', ['dishes' => $dishes]);
    }
}
