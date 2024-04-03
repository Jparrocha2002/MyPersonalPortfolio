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
                        <form action="{{ route('educationals.update', $educationals->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                        <div class="card-body">
                            <div class="table-responsive">
                                    <label>School Type</label>
                                    <input type="text" name="school_type" class="form-control" value="{{ $educationals->school_type }}" >
                                </div>
                                <div class="form-group">
                                    <label>School Name</label>
                                    <input type="text" name="school_name" class="form-control" value="{{ $educationals->school_name }}" >
                                </div>
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="text" name="date" class="form-control" value="{{ $educationals->date }}" >
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control">{{ $educationals->description }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="{{ route('educationals.index') }}" class="btn btn-danger">Back</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection