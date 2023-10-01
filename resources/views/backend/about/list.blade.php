@extends('backend.layouts.app')
@section('content')
    <div class="container-fluid">
        @include('_message')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            <b>About Page</b>
                        </h3>
                        {{-- @if ($errors->any())
                            <div class="alert alert-danger">
                                session($errors->all());
                            </div>
                        @endif --}}
                    </div>
                    <form class="form-horizontal" action="{{ route('admin.about.post') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Question </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="question" placeholder="Any Question"
                                        value="{{ @$getrecord[0]->question }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Questions Answare </label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="questions_answare" id="" cols="21" rows="7"
                                        placeholder="Give Questions Answare">{{ @$getrecord[0]->questions_answare }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">

                                <label class="col-sm-2 col-form-label" for="">Image </label>
                                <div class="col-sm-10">
                                    <input class="form-control mb-3" type="file" name="photo">

                                    @if (@$getrecord[0]->photo)
                                        <img src="{{ url('public/about/' . @$getrecord[0]->photo) }}" width="150"
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
