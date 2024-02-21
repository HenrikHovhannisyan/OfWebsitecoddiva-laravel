@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Show Blog</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('blogs.index') }}"> Back</a>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <div class="form-group">
                    <strong class="text-danger">Blog Title:</strong><br>
                    <span class="">{{ $blog->blog_title }}</span>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <strong class="text-danger">Blog Description:</strong><br>
                    {!! html_entity_decode($blog->blog_description) !!}
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <strong class="text-danger">Blog Image:</strong>
                        <div class="col-12 col-md-6 mt-3 text-center">
                            <img src="{{asset('upload/blogs/'.$blog->blog_image)}}" width="150" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <strong class="text-danger">Image 1:</strong>
                        <div class="col-12 col-md-6 mt-3 text-center">
                            <img src="{{asset('upload/blogs/'.$blog->image1)}}" width="150" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <strong class="text-danger">Image 2:</strong>
                        <div class="col-12 col-md-6 mt-3 text-center">
                            <img src="{{asset('upload/blogs/'.$blog->image1)}}" width="150" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
