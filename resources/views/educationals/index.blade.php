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
                            <h4>Educational Attainment</h4>
                            <a href="{{ route('educationals.create') }}" class="btn btn-primary mb-3">Add Educational</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>School Type</th>
                                            <th>School Name</th>
                                            <th>Date</th>
                                            <th>Description</th>
                                            <th>Action</th>
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
                                                <td>{{ $educational->description }}</td>
                                                <td>
                                                    <a href="{{ route('educationals.edit', $educational->id)}}" type="button" class="btn btn-warning btn-sm">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{$educational->id}}">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </td>
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
    @foreach($educationals as $educational)
        @include('educationals.modal.deleteModal')
    @endforeach
</div>

@endsection
