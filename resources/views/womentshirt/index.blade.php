@extends('layouts.navbar')

@section('content')
    <div class="container-sm">
        <div class="row">

            @forelse($womentshirts as $womentshirt)
                <div class="col-4">
                    <a href="/womentshirt/{{$womentshirt->id}}" style="text-decoration: none;color:black">
                    <img src="/storage/{{$womentshirt->image}}" style="width: 100%">

                    <div class="row">

                        <div class="h4" style="color:#555;font-weight: normal">{{$womentshirt->product}}</div>

                        <div class="text-center"><strong>Rs. {{$womentshirt->price}}</strong></div>

                    </div>
                    </a>
                </div>

            @empty
                {{'No products available'}}
            @endforelse

        </div>
    </div>

@endsection
