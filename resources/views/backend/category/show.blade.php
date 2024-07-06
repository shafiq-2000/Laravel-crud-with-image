@extends('backend.layout.master')
@section('title', 'Show Details')
@section('content')
    <div class="row">
        <div class="col-lg-6">

            <div class="card">
                <div class="card-header text-center">
                    <a href="{{ route('categories.index') }}">Manage</a>
                </div>
                <div class="card-body bg-success">
                    <p>{{ $category->name }}</p>
                    <p>{{ $category->email }}</p>
                    <p>{{ $category->description1 }}</p>


                </div>
            </div>

        </div>
    </div>

@endsection
