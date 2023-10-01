@extends('backend.layouts.app')
@section('content')
    <div class="container-fluid">
        @include('_message')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            <b>Brand Add Page</b>
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-warning">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Brand Name</th>
                                        <th scope="col">Brand Logo</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($brands as $brand)
                                        <tr class="">
                                            <td scope="row">{{ $brand->id }}</td>
                                            <td scope="row">{{ $brand->name }}</td>
                                            <td>
                                                <img width="40" src="{{ asset('public/brand') }}/{{ $brand->photo }}"
                                                    alt="">
                                            </td>
                                            <td>
                                                <a href="{{ route('brand.edit', $brand->id) }}"><i
                                                        class="fa fa-edit">Edit</i></a>|
                                                <a onclick="return confirm('Are you sure, you want to delete?')"
                                                    href="{{ route('brand.destroy', $brand->id) }}"><i
                                                        class="fa fa-trash">Delete</i></a>
                                            </td>
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
