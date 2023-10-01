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
                    <form class="form-horizontal" action="{{ route('brand.update', $getrecord->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Brand Name </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="name"
                                        value="{{ $getrecord->name }}">
                                </div>
                            </div>



                            <div class="form-group
                                        row">

                                <label class="col-sm-2 col-form-label" for="">Brand Logo </label>
                                <div class="col-sm-10">
                                    <input class="form-control mb-3" type="file" name="photo">
                                    <img width="200" height="200"
                                        src="{{ asset('public/brand') }}/{{ $getrecord->photo }}" alt="">
                                </div>
                                <input type="hidden" name="id" value="{{ @$getrecord->id }}">
                            </div>

                        </div>
                        <div class="card-footer">
                            <label class="col-sm-2 col-form-label" for=""> </label>
                            <button class="btn btn-primary" type="submit">Update</button>

                            <a href="{{ route('admin.dashboard') }}" class="btn btn-dark float-right">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
