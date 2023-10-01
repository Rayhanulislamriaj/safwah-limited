@extends('backend.layouts.app')
@section('content')
    <div class="container-fluid">
        @include('_message')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            <b>Edit Team Member Page</b>
                        </h3>
                    </div>
                    <form class="form-horizontal" action="{{ route('admin.team.update', $getrecord->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Members Name </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="name" placeholder="Enter Name"
                                        value="{{ @$getrecord->name }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Members Designation </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="designation"
                                        placeholder="Enter Designation" value="{{ @$getrecord->designation }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Members Description </label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="description" id="" cols="21" rows="7"
                                        placeholder="Enter Description">{{ @$getrecord->description }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">

                                <label class="col-sm-2 col-form-label" for="">Image </label>
                                <div class="col-sm-10">
                                    <input class="form-control mb-3" type="file" name="photo">

                                    {{-- @if (@$getrecord->photo) --}}
                                    <img src="{{ asset('public/team') }}/{{ $getrecord->photo }}" width="300"
                                        height="200" alt="">
                                    {{-- @endif --}}
                                </div>
                                <input type="hidden" name="id" value="{{ @$getrecord->id }}">
                            </div>

                        </div>
                        <div class="card-footer">
                            <label class="col-sm-2 col-form-label" for=""> </label>
                            <button type="submit" class="btn btn-success">Edit Team Members</button>

                            <a href="{{ route('admin.dashboard') }}" class="btn btn-dark float-right">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
