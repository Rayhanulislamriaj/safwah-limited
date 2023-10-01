@extends('backend.layouts.app')
@section('content')
    <div class="container-fluid">
        @include('_message')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            <b>My Account Page</b>
                        </h3>
                    </div>
                    <form class="form-horizontal" action="{{ route('admin.profile.update', $getrecord->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Name </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="name" required
                                        value="{{ @$getrecord->name }}">
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Email </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="email" name="email" required
                                        value="{{ @$getrecord->email }}">
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Password </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="password">
                                    <small>Leave blank if you are not changing the password.</small>
                                </div>
                            </div>

                            <div class="form-group row">

                                <label class="col-sm-2 col-form-label" for=""> </label>
                                <div class="col-sm-10">
                                    <input type="hidden" name="id" value="{{ @$getrecord->id }}">
                                </div>
                            </div>
                        </div>

                </div>
                <div class="card-footer">
                    <label class="col-sm-2 col-form-label" for=""> </label>
                    <button class="btn btn-info" type="submit">Profile Update</button>
                    {{-- <button type="submit" name="add_and_update" id="add_and_update"
                                value="@if (count($getrecord) > 0) Edit @else Add @endif" class="btn btn-info">
                                @if (count($getrecord) > 0)
                                    Edit
                                @else
                                    Add
                                @endif
                            </button> --}}
                    {{-- <button class="btn btn-info" type="submit" name="add_and_update" value="@if (count($getrecord) > 0)">Submit</button> --}}
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-dark float-right">Cancel</a>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
