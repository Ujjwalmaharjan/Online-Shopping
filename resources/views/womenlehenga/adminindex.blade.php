@extends('layouts.adminpage')

@section('admincontent')
    <div class="container">

        <div class="row">
            <h1><a href="/category/womentshirt" style="text-decoration: none;color:black">Women-Lehenga</a></h1>
        </div>

        <div class="row">
            <a href="/womenlehenga/create">Add new Product</a>
        </div>
        <table class="table">
            <tr>
                <th>id</th>
                <th>imageofproduct</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th></th>
            </tr>
            @forelse($womenlehengas as $womenlehenga)
                <tr>
                    <td>{{$womenlehenga->id}}</td>
                    <td><img src="{{$womenlehenga->image}}" style="width: 100px;height: 75px"></td>
                    <td><a href="/womenlehenga/{{$womenlehenga->id}}">{{$womenlehenga->product}}</a></td>
                    <td>{{$womenlehenga->price}}</td>
                    <td>{{$womenlehenga->quantity}}</td>
                    <td><a href="/womenlehenga/{{$womenlehenga->id}}/edit">edit</a></td>
                    <td>
                        <form action="/womenlehenga/{{$womenlehenga->id}}" method="post">
                            @method('DELETE')
                            @csrf

                            <button>delete</button>

                        </form>
                    </td>
                </tr>
            @empty
                {{'No product available'}}
            @endforelse
        </table>
    </div>

@endsection
