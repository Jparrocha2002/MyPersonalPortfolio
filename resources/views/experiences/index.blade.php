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
                            <h4>Experiences</h4>
                            <a href="{{ route('experiences.create') }}" class="btn btn-primary mb-3">Add Experience</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Job Title</th>
                                            <th>Company</th>
                                            <th>Date Hired</th>
                                            <th>Responsibility</th>
                                            <th>Action</th>
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
                                                <td>
                                                    <a href="{{ route('experiences.edit', $experience->id)}}" type="button" class="btn btn-warning btn-sm">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{$experience->id}}">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </td>
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
    @endforeach
</div>

@endsection
