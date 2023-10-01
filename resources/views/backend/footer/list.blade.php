@extends('backend.layouts.app')
@section('content')
    <div class="container-fluid">
        @include('_message')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            <b>Footer Page</b>
                        </h3>
                    </div>
                    <form class="form-horizontal" action="{{ route('admin.footer.post') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Company Footer Name </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="name" placeholder="Company Name"
                                        value="{{ @$getrecord[0]->name }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Company Footer Short Description
                                </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="description"
                                        placeholder="Company Short Description" value="{{ @$getrecord[0]->description }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Footer Number </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="phone" placeholder="Company Number"
                                        value="{{ @$getrecord[0]->phone }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Footer Location </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="location"
                                        placeholder="Company Location" value="{{ @$getrecord[0]->location }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Footer Email </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="email" name="email" placeholder="Company Email"
                                        value="{{ @$getrecord[0]->email }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Footer Facebook Page </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="facebook"
                                        placeholder="Company Facebook Page" value="{{ @$getrecord[0]->facebook }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Facebook Page Link </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="facebook_link"
                                        placeholder="Company Facebook Page Link"
                                        value="{{ @$getrecord[0]->facebook_link }}">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Footer Website </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="website" placeholder="Company Website"
                                        value="{{ @$getrecord[0]->website }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Website Link </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="website_link"
                                        placeholder="Company Website Link" value="{{ @$getrecord[0]->website_link }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Footer Youtube </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="youtube" placeholder="Company Youtube"
                                        value="{{ @$getrecord[0]->youtube }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Youtube Link </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="youtube_link"
                                        placeholder="Company Youtube Link" value="{{ @$getrecord[0]->youtube_link }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Footer Instagram Page </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="instagram"
                                        placeholder="Company Instagram Page" value="{{ @$getrecord[0]->instagram }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Instagram Page Link </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="instagram_link"
                                        placeholder="Company Instagram Page Link"
                                        value="{{ @$getrecord[0]->instagram_link }}">
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="">Desginer Name </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="desginer"
                                        placeholder="Desginer Name" value="{{ @$getrecord[0]->desginer }}">
                                    <input type="hidden" name="id" value="{{ @$getrecord[0]->id }}">
                                </div>
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

                            <a href="{{ route('admin.dashboard') }}" class="btn btn-dark float-right">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
