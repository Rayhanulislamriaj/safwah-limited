@extends('backend.layouts.app')
@section('content')
    <div class="container-fluid">
        @include('_message')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            <b>Brand Page</b>
                        </h3>
                    </div>
                    <form class="form-horizontal" action="{{ route('admin.team.post') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Brand Name </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="name" placeholder="Brand Name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Brand Nuber Count </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="Brand number"
                                        placeholder="Enter Designation">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Brand Description </label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="description" id="" cols="21" rows="7"
                                        placeholder="Enter Description"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">

                                <label class="col-sm-2 col-form-label" for="">Image </label>
                                <div class="col-sm-10">
                                    <input class="form-control mb-3" type="file" name="photo">


                                </div>
                                <input type="hidden" name="id">
                            </div>

                        </div>
                        <div class="card-footer">
                            <label class="col-sm-2 col-form-label" for=""> </label>
                            <button type="submit" class="btn btn-success">Add Brand</button>

                            <a href="{{ route('admin.dashboard') }}" class="btn btn-dark float-right">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>





    <div class="container-fluid mt-5">
        @include('_message')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            <b>Team Members Table</b>
                        </h3>
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-dark float-right">Go to Dashboard</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="bg-info text-white">
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tbody class="">
                                    @foreach ($teams as $team)
                                        <tr class="">
                                            <td scope="row">{{ $team->id }}</td>
                                            <td>{{ $team->name }}</td>
                                            <td>{{ $team->designation }}</td>
                                            <td>{{ $team->description }}</td>
                                            <td>
                                                <img width="100" src="{{ asset('public/team') }}/{{ $team->photo }}"
                                                    alt="">
                                            </td>


                                            <td>
                                                <a href="{{ route('admin.team.edit', $team->id) }}"><i
                                                        class="fa fa-edit">Edit</i></a> |
                                                <a onclick="return confirm('Are you sure, you want to delete?')"
                                                    href="{{ route('admin.team.delete', $team->id) }}"><i
                                                        class="fa fa-trash">Delete</i></a>
                                            </td>

                                        </tr>
                                    @endforeach
                            </table>
                        </div>

                    </div>





                </div>
            </div>
        </div>
    </div>
@endsection
