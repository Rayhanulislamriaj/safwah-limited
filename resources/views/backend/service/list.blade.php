@extends('backend.layouts.app')
@section('content')
    {{-- <div class="container-fluid">
        @include('_message')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            <b>Goal Page</b>
                        </h3>
                    </div>
                    <form class="form-horizontal" action="{{ route('admin.service.post') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Goals Name </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="goal_name" placeholder="Goals Name">
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Goals Description </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="goal_description"
                                        placeholder="Goals Description">
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
    </div> --}}




    <div class="container-fluid mt-5">
        @include('_message')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            <b>Goals Table</b>
                        </h3>
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-dark float-right">Cancel</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table
                                class="table table-striped
                            table-hover
                            table-borderless
                            table-primary
                            align-middle">
                                <thead class="table-light">
                                    <caption>Goal</caption>
                                    <tr>
                                        <th>ID</th>
                                        <th>Goals Name</th>
                                        <th>Goals Description</th>
                                        <th>Image</th>
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    @foreach ($goals as $goal)
                                        <tr class="table-primary">
                                            <td scope="row">{{ $goal->id }}</td>
                                            <td>{{ $goal->goal_name }}</td>
                                            {{-- <td>{{ $goal->goal_description }}</td> --}}
                                            <td>{{ Illuminate\Support\Str::limit($goal->goal_description, 20) }}</td>
                                            <td>
                                                <img width="40" src="{{ asset('public/service') }}/{{ $goal->photo }}"
                                                    alt="">
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.service.edit', $goal->id) }}"><i
                                                        class="fa fa-edit">Edit</i></a>
                                                {{-- <a href=""><i class="fa fa-trash"></i></a> --}}
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
