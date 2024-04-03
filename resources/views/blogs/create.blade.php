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
                            <h4>Create Blog</h4>
                        </div>
                        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="form-group">
                                    <label>Blog Image</label>
                                    <input type="file" name="blog_img" class="form-control-file">
                                </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" name="date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Author</label>
                                    <input type="text" name="author" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea name="content" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Link</label>
                                    <input type="link" name="link" class="form-control">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('blogs.index') }}" class="btn btn-danger">Back</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
