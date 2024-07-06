@extends('backend.layout.master')
@section('title', 'Show Details')
@section('content')
    <div class="row">
        <div class="col-lg-6">

            <div class="card">
                <div class="card-header text-center">
                    <h2>Product Show</h2>
                </div>
                <div class="card-body bg-light">

                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td>Product Name</td>
                                <td>Product Brand</td>
                                <td>Product Image</td>
                            </tr>

                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $product->product_name }}</td>
                                <td>{{ $product->brand_name }}</td>
                                {{-- <td>{{$product->image}}</td> --}}
                                <td><img style="width: 200px" class="mx-auto d-block"
                                        src="{{ asset('images/' . $product->image) }}" alt=""></td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('product_index') }}">Manage</a>

                </div>
            </div>

        </div>
    </div>

@endsection
