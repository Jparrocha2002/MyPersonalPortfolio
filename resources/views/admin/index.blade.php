@extends('app')

@section('content')
<!-- Main Content -->
@include('admin.create')
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="user">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center mb-4">
                            <h4>User</h4>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">Add User</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Role</th>
                                            <th>Avatar</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($admin->count() > 0)
                                        @foreach ($admin as $user)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                @if($user->role == 'admin')
                                                <div class="badge badge-success">Admin</div>
                                                @else
                                                <div class="badge badge-primary">Spectator</div>
                                                @endif
                                            </td>
                                            @if($user->avatar)
                                            <td>
                                                <img src="{{ asset('storage/' . $user->avatar) }}" alt="avatar" style="width: 40px; height:40px;" class="img-profile rounded-circle">
                                            </td>
                                            @else
                                            <td>
                                                <img src="{{ asset('assets/img/user1.jpg') }}" alt="avatar" style="width: 40px; height:40px;" class="img-profile rounded-circle">
                                            </td>
                                            @endif
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                 <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{$user->id}}">
                                                    <i class="fas fa-edit"></i>
                                                </a>

                                                <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{$user->id}}">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                        @endforeach
                                        @else
                                        <tr>
                                            <td colspan="5" class="text-center">No User Record found!</td>
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
    @foreach($admin as $user)
        @include('admin.modal.deleteModal')
        @include('admin.edit')
    @endforeach
</div>

@endsection
