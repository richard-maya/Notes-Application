<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class PublicController extends Controller
{

    // select * from `category` ORM Object-relational Mapping
    // Eloquent

    public function welcome(){
        $category = Category::where('id', '!=', 5)->get();
        dd($category);
    }
}
