<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category;

class CategoryController extends Controller
{

    public function save(Category $category)
    {
        dd($category->all());

    }

    public function add()
    {
        $route = route('category.save');

        return view('dashboard.category.add')->with(['route' => $route]);
    }

    public function index()
    {
        return view('dashboard.category.list');
    }
}
