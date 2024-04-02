@extends('app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="user">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center mb-4">
                            <h4>Edit User</h4>
                        </div>
                        <form action="{{ route('skills.update', $skills->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="form-group">
                                    <label>Skill Name</label>
                                    <input type="text" name="skill_name" class="form-control" value="{{ $skills->skill_name }}" >
                                </div>
                                <div class="form-group">
                                    <label>Percent</label>
                                    <input type="number" name="percent" class="form-control" value="{{ $skills->percent }}" >
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
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