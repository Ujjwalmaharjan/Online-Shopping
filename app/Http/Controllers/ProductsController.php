<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {

    }

    public function show()
    {
        return view('detail.index');
    }

    public function create()
    {
        return view('addNewProduct.index');
    }
}
