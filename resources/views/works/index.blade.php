@extends('app')

@section('content')
<!-- Main Content -->
@include('works.create')
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="user">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center mb-4">
                            <h4>Works</h4>
                            @if(Auth::user()->role == 'admin')
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">Add Work</a>
                            @endif
                        </div>
                        <div class="card-body">
                            @include('layouts.alert')
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Logo</th>
                                            <th>Name</th>
                                            <th>Link</th>
                                            <th>Type</th>
                                            @if(Auth::user()->role == 'admin')
                                            <th>Action</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($works->count() > 0)
                                        @foreach ($works as $work)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><img src="{{ asset('storage/' . $work->logo) }}" alt="Default Profile Picture" style="width: 40px; height:40px;" class="img-profile rounded-circle"></td>
                                            <td>{{ $work->name }}</td>
                                            <td>{{ $work->link }}</td>
                                            <td>{{ $work->type }}</td>
                                            @if(Auth::user()->role == 'admin')
                                            <td>
                                                <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{$work->id}}">
                                                    <i class="fas fa-edit"></i>
                                                </a>

                                                <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{$work->id}}">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                            @endif
                                        </tr>
                                    </tbody>
                                        @endforeach
                                        @else
                                        <tr>
                                            <td colspan="5" class="text-center">No Work Record found!</td>
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
    @foreach($works as $work)
        @include('works.modal.deleteModal')
        @include('works.edit')
    @endforeach
</div>

@endsection
