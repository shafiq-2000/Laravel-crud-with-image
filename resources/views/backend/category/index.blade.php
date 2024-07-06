@extends('backend.layout.master')
@section('title', 'All DataShow')

@section('content')


    <body class="container">
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="card">
                        <div class="card-header">

                            {{-- successfully alert --}}
                            @if (session('show'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('show') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif



                            <h2 class="display-4 text-center text-primary">Create Data</h2>
                        </div>
                        <div class="card-body">

                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>

                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Description</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->email }}</td>
                                            <td>{{ $category->description1 }}</td>


                                            <td>
                                                <form class="d-inline-block"
                                                    action="{{ route('categories.destroy', $category->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('Delete')
                                                    <button class="btn btn-danger btn-md"
                                                        onclick="return confirm('Are you sure')"><i
                                                            class="fa-solid fa-trash-can"></i></button>
                                                </form>

                                                <a href="{{ route('categories.show', $category->id) }}"
                                                    class="btn btn-info btn-md"><i class="fa-solid fa-eye"></i></a>

                                                <a href="{{ route('categories.edit', $category->id) }}"
                                                    class="btn btn-primary btn-md"><i
                                                        class="fa-solid fa-pen-to-square"></i></a>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- <div class="d-flex justify-content-center">
                                {{ $data->links() }}
                            </div> --}}

                            <a class="btn btn-primary btn-md" href="{{ route('categories.create') }}"><i
                                    class="fa-solid fa-square-up-right"></i></a>
                            <div class="float-end">
                                <a href="{{ url('/') }}">Home</a>
                            </div>
                        </div>

                    </div>

                    {{-- <h2 class="display-4 text-center text-primary">Create Data</h2> --}}
                    {{-- <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Description</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->email }}</td>
                                <td>{{ $category->description1 }}</td>
                                <td>
                                    <form class="d-inline-block" action="{{route('categories.destroy',$category->id)}}" method="POST">
                                        @csrf
                                        @method('Delete')
                                        <button class="btn btn-danger btn-lg" onclick="return confirm('Are you sure')"><i class="fa-solid fa-trash-can"></i></button>
                                    </form>
                                    <a href="{{route('categories.show',$category->id)}}" class="btn btn-info btn-lg"><i class="fa-solid fa-eye"></i></a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table> --}}


                </div>
            </div>
        </div>

    @endsection
