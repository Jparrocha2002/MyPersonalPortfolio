@extends('app')

@section('content')
<!-- Main Content -->
@include('blogs.create')
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="user">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center mb-4">
                            <h4>Blogs</h4>
                            @if(Auth::user()->role == 'admin')
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">Add Blog</a>
                            @endif
                        </div>
                        <div class="card-body">
                            @include('layouts.alert')
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Blog Image</th>
                                            <th>Title</th>
                                            <th>Uploaded</th>
                                            <th>Author</th>
                                            <th>Content</th>
                                            @if(Auth::user()->role == 'admin')
                                            <th>Action</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($blogs->count() > 0)
                                            @foreach ($blogs as $blog)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><img src="{{ asset('storage/' . $blog->blog_img) }}" alt="Default Profile Picture" style="width: 40px; height:40px;" class="img-profile rounded-circle"></td>
                                                <td>{{ $blog->title }}</td>
                                                <td>{{ $blog->date }}</td>
                                                <td>{{ $blog->author }}</td>
                                                <td>{{ $blog->content }}</td>   
                                                @if(Auth::user()->role == 'admin')
                                                <td>
                                                    <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{$blog->id}}">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{$blog->id}}">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </td>
                                                @endif
                                            </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="6" class="text-center">No Blog Record found!</td>
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
    @foreach($blogs as $blog)
        @include('blogs.modal.deleteModal')
        @include('blogs.edit')
    @endforeach
</div>

@endsection
