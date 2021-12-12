@extends('layouts.adminpage')

@section('admincontent')
    <div class="container">

        <div class="row">
            <h1><a href="/category/womentshirt" style="text-decoration: none;color:black">Women-Tshirt</a></h1>
        </div>

        <div class="row">
            <a href="/womentshirt/create">Add new Product</a>
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
            @forelse($womentshirts as $womentshirt)
                <tr>
                    <td>{{$womentshirt->id}}</td>
                    <td><img src="/storage/{{$womentshirt->image}}" style="width: 100px;height: 75px"></td>
                    <td><a href="/womentshirt/{{$womentshirt->id}}">{{$womentshirt->product}}</a></td>
                    <td>{{$womentshirt->price}}</td>
                    <td>{{$womentshirt->quantity}}</td>
                    <td><a href="/womentshirt/{{$womentshirt->id}}/edit">edit</a></td>
                    <td>
                        <form action="/womentshirt/{{$womentshirt->id}}" method="post">
                            @method('DELETE')
                            @csrf

                            <button>delete</button>

                        </form>
                    </td>
                </tr>
            @empty
                {{'no services available'}}
            @endforelse
        </table>
    </div>

@endsection
