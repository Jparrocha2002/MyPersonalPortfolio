@extends('app')

@section('content')
<!-- Main Content -->
@include('webinars.create')
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="user">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center mb-4">
                            <h4>Webinar</h4>
                            @if(Auth::user()->role == 'admin')
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">Add Webinar</a>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Agenda</th>
                                            <th>Host Name</th>
                                            <th>Date</th>
                                            @if(Auth::user()->role == 'admin')
                                            <th>Action</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($webinars->count() > 0)
                                        @foreach ($webinars as $webinar)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><img src="{{ asset('storage/' . $webinar->webinar_img) }}" alt="Default Profile Picture" style="width: 40px; height:40px;" class="img-profile rounded-circle"></td>
                                            <td>{{ $webinar->agenda }}</td>
                                            <td>{{ $webinar->host_name }}</td>
                                            <td>{{ $webinar->date }}</td>
                                            @if(Auth::user()->role == 'admin')
                                            <td>
                                                <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{$webinar->id}}">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{$webinar->id}}">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                            @endif
                                        </tr>
                                    </tbody>
                                        @endforeach
                                        @else
                                        <tr>
                                            <td colspan="5" class="text-center">No Webinar Record found!</td>
                                        </tr>
                                        @endif
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @foreach($webinars as $webinar)
        @include('webinars.modal.deleteModal')
        @include('webinars.edit')
    @endforeach
</div>

@endsection
