@extends('backend.layout.master')

@section('title', 'CRUD OPERATION')

@section('content')

    <h1 class="display-1 text-center bg-dark text-danger">CRUD OPERATION</h1>
    <a class="btn btn-primary btn-lg" href="{{ route('categories.create') }}">Create Category</a>


    <a class="btn btn-info btn-lg" href="{{ route('categories.index') }}">Manage Category</a>
    <br><br>
    <h1 class="display-1 text-center bg-dark text-danger">CRUD OPERATION WITH IMAGE</h1>
    <a class="btn btn-primary btn-lg" href="{{ route('product_index') }}">Manage product</a>


    <a class="btn btn-info btn-lg" href="{{ route('categories.index') }}">Create product</a>

@endsection
