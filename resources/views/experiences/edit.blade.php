@extends('app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="user">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center mb-4">
                            <h4>Edit Educational</h4>
                        </div>
                        <form action="{{ route('experiences.update', $experiences->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="form-group">
                                    <label>Job Title</label>
                                    <input type="text" name="job_title" class="form-control" value="{{ $experiences->job_title }}" >
                                </div>
                                <div class="form-group">
                                    <label>Company</label>
                                    <input type="text" name="company" class="form-control" value="{{ $experiences->company }}" >
                                </div>
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" name="date" class="form-control" value="{{ $experiences->date }}" >
                                </div>
                                <div class="form-group">
                                    <label>Responsibility</label>
                                    <input type="text" name="responsibility" class="form-control" value="{{ $experiences->responsibility }}" >
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('experiences.index') }}" class="btn btn-danger">Back</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection