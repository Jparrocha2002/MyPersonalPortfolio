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
                            <h4>Create Skill</h4>
                        </div>
                        <form action="{{ route('skills.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="form-group">
                                    <label>Skill Name</label>
                                    <input type="text" name="skill_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Percent</label>
                                    <input type="number" name="percent" class="form-control" >
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('skills.index') }}" class="btn btn-danger">Back</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection