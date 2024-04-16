@extends('app')

@section('content')
<!-- Main Content -->
@include('experiences.create')
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="user">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center mb-4">
                            <h4>Experiences</h4>
                            @if(Auth::user()->role == 'admin')
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">Add Experience</a>
                            @endif
                        </div>
                        <div class="card-body">
                            @include('layouts.alert')
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Job Title</th>
                                            <th>Company</th>
                                            <th>Date Hired</th>
                                            <th>Responsibility</th>
                                            @if(Auth::user()->role == 'admin')
                                            <th>Action</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($experiences->count() > 0)
                                            @foreach ($experiences as $experience)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $experience->job_title }}</td>
                                                <td>{{ $experience->company }}</td>
                                                <td>{{ $experience->date }}</td>
                                                <td>{{ $experience->responsibility }}</td>
                                                @if(Auth::user()->role == 'admin')
                                                <td>
                                                    <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{$experience->id}}">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{$experience->id}}">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </td>
                                                @endif
                                            </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="6" class="text-center">No Experience Record found!</td>
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
    @foreach($experiences as $experience)
        @include('experiences.modal.deleteModal')
        @include('experiences.edit')
    @endforeach
</div>

@endsection
