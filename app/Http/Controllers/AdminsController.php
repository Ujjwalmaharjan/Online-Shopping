<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function show()
    {
        return view('admin.master');
    }
    public function index()
    {
//        $users=\App\Models\User::all();
//
//        return view('admin.customer',compact('users'));
    }

    public function store()
    {
//        $data=request()->validate([
//            'image'=>'required',
//            'product'=>'required',
//            'price'=>'required',
//            'quantity'=>'required',
//        ]);
//
//        \App\Models\Womentshirt::create($data);
//
//        return redirect('/admin/product/women/tshirt/');
    }

    public function edit()
    {

    }
}
