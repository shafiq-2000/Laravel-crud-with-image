@extends('backend.layout.master')
@section('title', 'CreateData')

@section('content')

    <body>
        <div class="container my-5">
            <div class="row">



                <div class="col-lg-6 offset-lg-3">
                    <form action="{{ Route('product_update', $product->id) }}" method="POST" class="shadow p-5"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <h2 class="display-2 text-center text-primary">Product Edit</h2>

                        <div class="form-group mb-3">
                            <label for="name">Product Name</label>
                            <input type="text" name="pname" id="name" value="{{ $product->product_name }}"
                                class="form-control">

                            {{-- error show --}}
                            @error('pname')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="name">Brand Name</label>
                            <input type="text" name="bname" id="bname" value="{{ $product->brand_name }}"
                                class="form-control">

                            {{-- error show --}}
                            @error('bname')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="name">Product Image</label>
                            <input type="file" name="pimage" id="img" accept="image/*"
                                onchange="previewImage(event)" class="form-control">
                            {{-- <br>
                            <img style="width: 200px" class="mx-auto d-block" src="{{asset('images/' .$product->image)}}" alt=""> --}}
                            <br>
                            <img id="preview" alt="Preview Image" class="mx-auto d-block">
                        </div>


                        <div class="form-group">
                            <input type="submit" class="btn btn-primary w-100 value="save">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    @endsection
