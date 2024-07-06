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
                    <form action="{{ Route('categories.store') }}" method="POST" class="shadow p-5">
                        @csrf

                        <h2 class="display-2 text-center text-primary">Create Data</h2>

                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name1" id="name" placeholder="enter your name"
                                class="form-control">

                            {{-- error show --}}
                            @error('name1')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group mb-3">
                            <label for="name">Email</label>
                            <input type="email" name="email" id="email" placeholder="enter your email"
                                class="form-control">

                            {{-- error show --}}
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="name">Description</label>
                            <input type="text" name="description1" id="description1"
                                placeholder="enter your description1" class="form-control">

                            {{-- error show --}}
                            @error('description1')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <input type="submit" class="btn btn-primary w-100 value="save">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    @endsection
