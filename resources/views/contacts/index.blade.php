@extends('app')

@section('content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="user">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center mb-4">
                            <h4>Messages</h4>
                        </div>
                        <div class="card-body">
                            @include('layouts.alert')
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($contacts->count() > 0)
                                            @foreach ($contacts as $contact)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $contact->first_name }}</td>
                                                <td>{{ $contact->last_name }}</td>
                                                <td>{{ $contact->email }}</td>
                                                @if(Auth::user()->role == 'admin')
                                                <td>
                                                    <a href="#" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#message{{$contact->id}}">
                                                        <i class="fas fa-comment"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{$contact->id}}">
                                                        <i class="fas fa-trash"></i>
                                                    </a> 
                                                </td>
                                                @else
                                                <td>
                                                    <a href="#" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#message{{$contact->id}}">
                                                        <i class="fas fa-comment"></i>
                                                    </a>
                                                </td>
                                                @endif
                                            </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="6" class="text-center">No Message Record found!</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @foreach($contacts as $contact)
        @include('contacts.modal.view_message')
        @include('contacts.modal.deleteModal')
    @endforeach
</div>

@endsection
