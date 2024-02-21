@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Blog</h2>
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
            <form action="{{ route('blogs.update',$blog->id) }}" method="POST" enctype="multipart/form-data"
                  class="mt-3">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <strong>Blog Title:</strong>
                            <input type="text" name="blog_title" value="{{ $blog->blog_title }}" class="form-control"
                                   placeholder="Name">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <strong>Blog Description:</strong><br>
                            <textarea name="blog_description" id="description" class="form-control" placeholder="Blog Description" id="">
                                {{ $blog->blog_description }}
                            </textarea>
                        </div>
                    </div>
                    <hr class="mt-3">

                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <strong>Image:</strong>
                            <div class="d-flex align-items-center">
                                <input type="file" name="blog_image" class="form-control" placeholder="Blog Image">
                                <img src="{{asset('upload/blogs/'.$blog->blog_image)}}" width="100px" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <strong>Image 1:</strong>
                            <div class="d-flex align-items-center">
                                <input type="file" name="image1" class="form-control" placeholder="Image 1">
                                <img src="{{asset('upload/blogs/'.$blog->image1)}}" width="100px" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <strong>Image 2:</strong>
                            <div class="d-flex align-items-center">
                                <input type="file" name="image2" class="form-control" placeholder="Image 2">
                                <img src="{{asset('upload/blogs/'.$blog->image2)}}" width="100px" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3 text-center">
                        <button type="submit" class="btn btn-primary">Edit</button>
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
