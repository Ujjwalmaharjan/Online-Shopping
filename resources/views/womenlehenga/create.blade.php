@extends('layouts.adminpage')

@section('content')
    <div class="container-sm p-5">

    <form method="post" enctype="multipart/form-data" action="/womenlehenga">
        @csrf

        <div class="row mb-3">
            <label for="image" class="col-md-4 col-form-label text-md-right">image</label>

            <div class="col-md-6">
                <input type="text" name="image" autocomplete="off">
                @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="product" class="col-md-4 col-form-label text-md-right">product name</label>

            <div class="col-md-6">
                <input type="text" name="product" value="{{old('product')}}" autocomplete="off">
                @error('product')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="price" class="col-md-4 col-form-label text-md-right">price</label>

            <div class="col-md-6">
                <input type="text" name="price" value="{{old('price')}}" autocomplete="off">
                @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>


        <div class="row mb-3">
            <label for="quantity" class="col-md-4 col-form-label text-md-right">quantity</label>

            <div class="col-md-6">
                <input type="text" name="quantity" value="{{old('quantity')}}" autocomplete="off">
                @error('quantity')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Add Product
                </button>
            </div>
        </div>
    </form>
    </div>
@endsection
