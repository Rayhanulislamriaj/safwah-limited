@extends('backend.layouts.app')
@section('content')
    <div class="container-fluid mt-5">
        @include('_message')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            <b>Contact Table</b>
                        </h3>
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-dark float-right">Go to Dashboard</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="bg-dark text-white">
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Time</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tbody class="">
                                    @foreach ($contacts as $contact)
                                        <tr class="">
                                            <td scope="row">{{ $contact->id }}</td>
                                            <td>{{ $contact->name }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->subject }}</td>
                                            <td>{{ $contact->message }}</td>
                                            <td>{{ $contact->created_at->diffForHumans() }}</td>

                                            <td>
                                                ---
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
