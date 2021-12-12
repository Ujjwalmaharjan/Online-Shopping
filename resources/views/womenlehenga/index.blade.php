@extends('layouts.navbar')

@section('content')
    <div class="container-sm">
        <div class="row">

            @forelse($womenlehengas as $womenlehenga)
                <div class="col-4">

                    <a href="/womenlehenga/{{$womenlehenga->id}}" style="text-decoration: none;color:black">

                    <img src="{{$womenlehenga->image}}" style="width: 100%">

                    <div class="row">

                        <div class="h4" style="color:#555;font-weight: normal">{{$womenlehenga->product}}</div>

                        <div class="text-center"><strong>{{$womenlehenga->price}}</strong></div>

                    </div>
                    </a>
                </div>

            @empty
                {{'No products available'}}
            @endforelse

        </div>
    </div>

@endsection
