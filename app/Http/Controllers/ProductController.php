<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{

    public function add()
    {
        return view('dashboard.product.add');
    }

    public function index()
    {
        return view('dashboard.product.list');
    }
}
