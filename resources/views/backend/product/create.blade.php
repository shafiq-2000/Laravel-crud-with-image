@extends('backend.layout.master')
@section('title', 'CreateData')

@section('content')

    <body>
        <div class="container my-5">
            <div class="row">

                {{-- error show --}}
                {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}


                <div class="col-lg-6 offset-lg-3">
                    <form action="{{ route('product_store') }}" method="POST" class="shadow p-5" enctype="multipart/form-data">
                        @csrf

                        <h2 class="display-2 text-center text-primary">Create Product</h2>

                        <div class="form-group mb-3">
                            <label for="name">Product Name</label>
                            <input type="text" name="pname" id="name" placeholder="enter your product name"
                                class="form-control">

                            {{-- error show --}}
                            @error('pname')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="name">Brand Name</label>
                            <input type="text" name="bname" id="bname" placeholder="enter your brand name"
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
                            <br>
                            <img id="preview" alt="Preview Image" class="mx-auto d-block">

                        </div>


                        <div class="form-group">
                            <input type="submit" class="btn btn-primary w-100 value="save">
                        </div>
                        <a href="{{ route('product_index') }}">Manage Page</a>
                        {{-- <a href="{{url('/')}}">Home</a> --}}
                    </form>
                </div>
            </div>
        </div>
    @endsection
