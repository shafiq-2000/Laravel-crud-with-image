@extends('backend.layout.master')
@section('title', 'EditData')

@section('content')


    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <form action="{{ Route('categories.update', $category->id) }}" method="POST" class="shadow p-5">
                @csrf
                @method('PUT')
                <h2 class="display-2 text-center text-primary">Edit Data</h2>

                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name1" id="name" value="{{ $category->name }}" class="form-control"
                        required>
                </div>


                <div class="form-group mb-3">
                    <label for="name">Email</label>
                    <input type="email" name="email" id="email" value="{{ $category->email }}" class="form-control"
                        required>
                </div>

                <div class="form-group mb-5">
                    <label for="name">Description</label>
                    <input type="text" name="description1" id="description1" value="{{ $category->description1 }}"
                        class="form-control" required>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary w-100 value="Update">
                </div>

            </form>
        </div>
    </div>

@endsection
