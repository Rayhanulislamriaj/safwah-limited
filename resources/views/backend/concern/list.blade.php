@extends('backend.layouts.app')
@section('content')
    <div class="container-fluid">
        @include('_message')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            <b>Concern Page</b>
                        </h3>
                    </div>
                    <form class="form-horizontal" action="{{ route('admin.concern.post') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Concern Name </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="concern_name"
                                        placeholder="Concern Name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Concern Short Description </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="concern_description"
                                        placeholder="Concern Short Description">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Concern Link </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="concern_link"
                                        placeholder="Give Concern Link">
                                </div>
                            </div>

                            <div class="form-group row">

                                <label class="col-sm-2 col-form-label" for="">Image </label>
                                <div class="col-sm-10">
                                    <input class="form-control mb-3" type="file" name="photo">

                                    @if (@$getrecord[0]->photo)
                                        <img src="{{ url('public/img/' . @$getrecord[0]->photo) }}" width="300"
                                            height="200" alt="">
                                    @endif
                                </div>
                                <input type="hidden" name="id" value="{{ @$getrecord[0]->id }}">
                            </div>

                        </div>
                        <div class="card-footer">
                            <label class="col-sm-2 col-form-label" for=""> </label>
                            <button class="btn btn-primary" type="submit">Submit</button>

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
                            <b>Concern Table</b>
                        </h3>
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-dark float-right">Cancel</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table
                                class="table table-striped
                            table-hover
                            table-bordered
                            table-info
                            align-middle">
                                <thead class="table-dark">
                                    <caption>Concern</caption>
                                    <tr>
                                        <th>ID</th>
                                        <th>Concern Name</th>
                                        <th>Concern Description</th>
                                        <th>Concern Link</th>
                                        <th>Image</th>
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    @foreach ($concerns as $concern)
                                        <tr class="table-primary">
                                            <td scope="row">{{ $concern->id }}</td>
                                            <td>{{ $concern->concern_name }}</td>
                                            <td>{{ $concern->concern_description }}</td>
                                            <td>{{ $concern->concern_link }}</td>
                                            <td>
                                                <img width="40"
                                                    src="{{ asset('public/concern') }}/{{ $concern->photo }}"
                                                    alt="">
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.concern.edit', $concern->id) }}"><i
                                                        class="fa fa-edit">Edit</i></a>|
                                                <a onclick="return confirm('Are you sure, you want to delete?')"
                                                    href="{{ route('admin.concern.delete', $concern->id) }}"><i
                                                        class="fa fa-trash">Delete</i></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                                <tfoot>

                                </tfoot>
                            </table>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
