@extends('app')

@section('content')
@include('educationals.create')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="user">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center mb-4">
                            <h4>Educational Attainment</h4>
                            @if(Auth::user()->role == 'admin')
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createEducationalModal">Add Educational</a>
                            @endif
                        </div>
                        <div class="card-body">
                            @include('layouts.alert')
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>School Type</th>
                                            <th>School Name</th>
                                            <th>Year Graduated</th>
                                            <th>Address</th>
                                            @if(Auth::user()->role == 'admin')
                                            <th>Action</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($educationals->count() > 0)
                                            @foreach ($educationals as $educational)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $educational->school_type }}</td>
                                                <td>{{ $educational->school_name }}</td>
                                                <td>{{ $educational->date }}</td>
                                                <td>{{ $educational->address }}</td>
                                                @if(Auth::user()->role == 'admin')
                                                <td>
                                                <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editEducationalModal{{$educational->id}}">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                    <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{$educational->id}}">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </td>
                                                @endif
                                            </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="6" class="text-center">No Educational Record found!</td>
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
    <!------Crud Modals------>
    @foreach($educationals as $educational)
        @include('educationals.edit')
        @include('educationals.modal.deleteModal')
    @endforeach
</div>

@endsection
