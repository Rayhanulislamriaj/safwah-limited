@extends('backend.layouts.app')
@section('content')
    <div class="container-fluid">
        @include('_message')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            <b>Home Page</b>
                        </h3>
                    </div>
                    <form class="form-horizontal" action="{{ route('admin.home.post') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Header Name </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="header_name"
                                        placeholder="Enter Company Name" value="{{ @$getrecord[0]->header_name }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Header Phone </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="phone"
                                        placeholder="Enter Company Phone" value="{{ @$getrecord[0]->phone }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Header Location </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="location"
                                        placeholder="Enter Company Location" value="{{ @$getrecord[0]->location }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Header Email </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="email" name="email"
                                        placeholder="Enter Company Email" value="{{ @$getrecord[0]->email }}">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Company Name </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="description_short"
                                        placeholder="Enter Company Name" value="{{ @$getrecord[0]->description_short }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Long Description </label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="description_long" id="" cols="21" rows="7"
                                        placeholder="Enter Short Description">{{ @$getrecord[0]->description_long }}</textarea>
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
                            <button type="submit" name="add_and_update" id="add_and_update"
                                value="@if (count($getrecord) > 0) Edit @else Add @endif" class="btn btn-info">
                                @if (count($getrecord) > 0)
                                    Edit
                                @else
                                    Add
                                @endif
                            </button>
                            {{-- <button class="btn btn-info" type="submit" name="add_and_update" value="@if (count($getrecord) > 0)">Submit</button> --}}
                            <a href="{{ route('admin.dashboard') }}" class="btn btn-dark float-right">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
