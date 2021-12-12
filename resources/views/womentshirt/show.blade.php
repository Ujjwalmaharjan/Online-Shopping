@extends('layouts.navbar')

@section('content')
    <div class="container-sm">
        <div class="row">
            <div class="col-12">
                <div class="d-flex">
                    <img src="{{$womentshirt->image}}" class="w-25">


                    <div class="h4 " style="color:#555;font-weight: normal"> {{$womentshirt->product}} </div>
                </div>
                <div class="row">


                    <div><strong>Rs. {{$womentshirt->price}}</strong></div>

                </div>
            </div>

        </div>
    </div>
    </div>

@endsection
