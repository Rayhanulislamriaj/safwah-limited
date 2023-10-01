@extends('backend.layouts.app')
@section('content')
    <div class="container-fluid">
        @include('_message')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            <b>Edit Concern Page</b>
                        </h3>
                    </div>
                    <form class="form-horizontal" action="{{ route('admin.concern.update', $getrecord->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Concern Name </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="concern_name"
                                        value="{{ $getrecord->concern_name }}">
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Concern Short Description </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="concern_description"
                                        value="{{ $getrecord->concern_description }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Concern Link </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="concern_link"
                                        value="{{ $getrecord->concern_link }}">
                                </div>
                            </div>

                            <div class="form-group row">

                                <label class="col-sm-2 col-form-label" for="">Image </label>
                                <div class="col-sm-10">
                                    <input class="form-control mb-3" type="file" name="photo">
                                    <img width="200" height="200"
                                        src="{{ asset('public/concern') }}/{{ $getrecord->photo }}" alt="">
                                </div>
                                <input type="hidden" name="id" value="{{ @$getrecord[0]->id }}">
                            </div>

                        </div>
                        <div class="card-footer">
                            <label class="col-sm-2 col-form-label" for=""> </label>
                            <button class="btn btn-primary" name="update" id="update" type="submit">Submit</button>

                            <a href="{{ route('admin.concern') }}" class="btn btn-dark float-right">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
