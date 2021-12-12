<?php

namespace App\Http\Controllers;

use App\Models\Womenlehenga;
use Illuminate\Http\Request;

class WomenlehengaController extends Controller
{

    public function index()
    {
        $womenlehengas = Womenlehenga::all();

        return view('womenlehenga.index',compact('womenlehengas'));
    }

    public function adminindex()
    {
        $womenlehengas = Womentlehenga::all();

        return view('womenlehenga.adminindex',compact('womenlehengas'));
    }

    public function create()
    {
        return view('womenlehenga.create');
    }

    public function store()
    {
        $data = request()->validate([
            'image'=>'required',
            'product'=>'required',
            'price'=>'required',
            'quantity'=>'required',
        ]);

        $imagePath=\request('image')->store
        Womenlehenga::create($data);

        return redirect('/womenlehenga');
    }

    public function show(Womenlehenga $womenlehenga)
    {
        return view('womenlehenga.show',compact('womenlehenga'));
    }

    public function edit(Womenlehenga $womenlehenga)
    {
        return view('womenlehenga.edit',compact('womenlehenga'));
    }

    public function update(Womenlehenga $womenlehenga)
    {
        $data = request()->validate([
            'product'=>'required',
            'price'=>'required',
            'quantity'=>'required',
        ]);

        $womenlehenga->update($data);

        return redirect('/womenlehenga');
    }

    public function destroy(Womenlehenga $womenlehenga)
    {
        $womenlehenga->delete();

        return redirect('/womenlehenga');
    }

}
