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
                            <h4>Create Educational</h4>
                        </div>
                        <form action="{{ route('educationals.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="form-group">
                                    <label>School Type</label>
                                    <input type="text" name="school_type" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>School Name</label>
                                    <input type="text" name="school_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="text" name="date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('educationals.index') }}" class="btn btn-danger">Back</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
