@extends('app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="user">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center mb-4">
                            <h4>Edit Profile</h4>
                        </div>
                        <form action="{{ route('profile.update', $profile->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="table-responsive">
                                <!-- <div class="form-group">
                                    <label>Role</label>
                                    <select name="role" class="form-control" value="{{ $profile->role }}">
                                        <option value="admin">Admin</option>
                                    </select>
                                </div> -->
                                <div class="form-group">
                                    <label>Role</label>
                                    <input type="text" name="role" class="form-control" value="{{ $profile->role }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Avatar</label>
                                    <input type="file" name="avatar" class="form-control-file" value="{{ $profile->avatar }}">
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" value="{{ $profile->name }}" >
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" value="{{ $profile->email }}" >
                                </div>
                                <div class="form-group">
                                    <label>Job</label>
                                    <input type="text" name="job" class="form-control" value="{{ $profile->job }}" >
                                </div>
                                <div class="form-group">
                                    <label>Birthday</label>
                                    <input type="date" name="birthday" class="form-control" value="{{ $profile->birthday }}" >
                                </div>
                                <div class="form-group">
                                    <label>Age</label>
                                    <input type="text" name="age" class="form-control" value="{{ $profile->age }}" >
                                </div>
                                <div class="form-group">
                                    <label>Gender</label>
                                    <input type="text" name="gender" class="form-control" value="{{ $profile->gender }}" >
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="form-control" value="{{ $profile->phone }}" >
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" class="form-control" value="{{ $profile->address }}" >
                                </div>
                                <div class="form-group">
                                    <label>Religion</label>
                                    <input type="text" name="religion" class="form-control" value="{{ $profile->religion }}" >
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <input type="text" name="status" class="form-control" value="{{ $profile->status }}" >
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control">{{ $profile->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Fb Link</label>
                                    <input type="text" name="fb_link" class="form-control" value="{{ $profile->fb_link }}" >
                                </div>
                                <div class="form-group">
                                    <label>Instagram Link</label>
                                    <input type="text" name="instagram_link" class="form-control" value="{{ $profile->instagram_link }}" >
                                </div>
                                <div class="form-group">
                                    <label>Linkedin Link</label>
                                    <input type="text" name="linkedin_link" class="form-control" value="{{ $profile->linkedin_link }}" >
                                </div>
                                <div class="form-group">
                                    <label>Github Link</label>
                                    <input type="text" name="github_link" class="form-control" value="{{ $profile->github_link }}" >
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('home') }}" class="btn btn-danger">Back</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection