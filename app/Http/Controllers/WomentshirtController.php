<?php

namespace App\Http\Controllers;

use App\Models\Womentshirt;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class WomentshirtController extends Controller
{

    public function index()
    {
        $womentshirts = Womentshirt::all();

        return view('womentshirt.index',compact('womentshirts'));
    }

    public function adminindex()
    {
        $womentshirts = Womentshirt::all();

        return view('womentshirt.adminindex',compact('womentshirts'));
    }


    public function create()
    {
        return view('womentshirt.create');
    }

    public function store()
    {
        $data = request()->validate([
            'image'=>'required|image',
            'product'=>'required',
            'price'=>'required',
            'quantity'=>'required',
        ]);

        $imagePath = request('image')->store('uploads','public');

        Womentshirt::create([
            'product'=>$data['product'],
            'price'=>$data['price'],
            'quantity'=>$data['quantity'],
            'image'=>$imagePath,
        ]);

        return redirect('/womentshirt');
    }

    public function show(Womentshirt $womentshirt)
    {
        return view('womentshirt.show',compact('womentshirt'));
    }

    public function edit(Womentshirt $womentshirt)
    {
        return view('womentshirt.edit',compact('womentshirt'));
    }

    public function update(Womentshirt $womentshirt)
    {
        $data = request()->validate([
            'product'=>'required',
            'price'=>'required',
            'quantity'=>'required',
        ]);

        $womentshirt->update($data);

        return redirect('/womentshirt');
    }

    public function destroy(Womentshirt $womentshirt)
    {
        $womentshirt->delete();

        return redirect('/womentshirt');
    }

}
