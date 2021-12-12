@extends('layouts.navbar')

@section('content')
    <div class="container-sm">
        <div class="row">
            <div class="col-12">
                <div class="d-flex">
                    <img src="{{$womenlehenga->image}}" class="w-25">


                    <div class="h4 " style="color:#555;font-weight: normal"> {{$womenlehenga->product}} </div>
                </div>
                <div class="row">


                    <div><strong>Rs. {{$womenlehenga->price}}</strong></div>

                </div>
            </div>

        </div>
    </div>
    </div>

@endsection
