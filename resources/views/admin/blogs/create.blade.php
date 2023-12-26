@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Add New Blog</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('blogs.index') }}"> Back</a>
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="col-12">
            <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data" class="mt-3">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <strong>Blog Title:</strong>
                            <input type="text" name="blog_title" class="form-control" placeholder="Blog Title">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <strong>Blog Description:</strong><br>
                            <textarea name="blog_description" class="form-control" placeholder="Blog Description" id=""></textarea>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <strong>Blog Image:</strong>
                            <input type="file" name="blog_image" class="form-control" placeholder="Blog Image">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <strong>Title:</strong>
                            <input type="text" name="title" class="form-control" placeholder="Title">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <strong>Description:</strong><br>
                            <textarea name="description" id="description" class="form-control" placeholder="Description"></textarea>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <strong>Image 1:</strong>
                            <input type="file" name="image1" class="form-control" placeholder="Image 1">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <strong>Image 2:</strong>
                            <input type="file" name="image2" class="form-control" placeholder="Image 2">
                        </div>
                    </div>
                    <div class="col-12 text-center mt-3">
                        <button type="submit" class="btn btn-success">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        ClassicEditor.create(document.querySelector("#description"), {
            toolbar: {
                items: [
                    'undo', 'redo',
                    '|', 'heading',
                    '|', 'fontfamily', 'fontsize', 'fontColor', 'fontBackgroundColor',
                    '|', 'bold', 'italic', 'strikethrough', 'subscript', 'superscript', 'code',
                    '|', 'link', 'codeBlock',
                    '|', 'bulletedList', 'numberedList', 'todoList',
                ],
                shouldNotGroupWhenFull: false
            }
        }).catch((error) => {
            console.error(error);
        });
    </script>
@endsection
