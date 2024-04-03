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
                            <h4>Blogs</h4>
                            <a href="{{ route('blogs.create') }}" class="btn btn-primary mb-3">Add Blog</a>
                        </div>
                        <div class="card-body">
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
                                            <th>Link</th>
                                            <th>Action</th>
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
                                                <td>{{ $blog->link }}</td>
                                                <td>
                                                    <a href="{{ route('blogs.edit', $blog->id)}}" type="button" class="btn btn-warning btn-sm">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{$blog->id}}">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </td>
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
    @endforeach
</div>

@endsection
