@extends('app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="user">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center mb-4">
                            <h4>Edit Blog</h4>
                        </div>
                        <form action="{{ route('blogs.update', $blogs->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="form-group">
                                    <label>Blog Image</label>
                                    <input type="file" name="blog_img" class="form-control-file" value="{{ $blogs->blog_img }}" >
                                </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control" value="{{ $blogs->title }}" >
                                </div>
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" name="date" class="form-control" value="{{ $blogs->date }}" >
                                </div>
                                <div class="form-group">
                                    <label>Author</label>
                                    <input type="text" name="author" class="form-control" value="{{ $blogs->author }}" >
                                </div>
                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea name="content" class="form-control">{{ $blogs->content }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Link</label>
                                    <input type="link" name="link" class="form-control" value="{{ $blogs->link }}" >
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="{{ route('blogs.index') }}" class="btn btn-danger">Back</a>
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