@extends('layouts.navbar')

@section('content')
    <div class="container-sm">
        <div class="row">

            @foreach($womentshirts as $womentshirt)
            <div class="col-4">

                <img src="{{$womentshirt->image}}" style="width: 100%">

                <div class="row">

                <div class="h4" style="color:#555;font-weight: normal">DIMANAF Plus Size Women Jacket Denim</div>

                    <div class="text-center"><strong>Rs. 50</strong></div>

                </div>
            </div>
                @endforeach

            <div class="col-4">

                <img src="https://img.joomcdn.net/94dbc89bdc6cdcdf6482894f33d534679a700318_original.jpeg" style="width: 100%">

                <div class="row">

                    <div class="h4" style="color:#555;font-weight: normal">Red printed T-shirt</div>

                    <div class="text-center"><strong>Rs. 50</strong></div>

                </div>
            </div>


            <div class="col-4">

                <img src="https://img.joomcdn.net/f1d321db13113ced0e8b840b31eab59136330a6b_original.jpeg" style="width: 100%">

                <div class="row">

                    <div class="h4" style="color:#555;font-weight: normal">Red printed T-shirt</div>

                    <div class="text-center"><strong>Rs. 50</strong></div>

                </div>
            </div>

            <div class="col-4">

                <img src="https://img.joomcdn.net/94dbc89bdc6cdcdf6482894f33d534679a700318_original.jpeg" style="width: 100%">

                <div class="row">

                    <div class="h4" style="color:#555;font-weight: normal">Red printed T-shirt</div>

                    <div class="text-center"><strong>Rs. 50</strong></div>

                </div>
            </div>


            <div class="col-4">

                <img src="https://img.joomcdn.net/f1d321db13113ced0e8b840b31eab59136330a6b_original.jpeg" style="width: 100%">

                <div class="row">

                    <div class="h4" style="color:#555;font-weight: normal">DIMANAF Plus Size Women Jacket Denim</div>

                    <div class="text-center"><strong>Rs. 50</strong></div>

                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
