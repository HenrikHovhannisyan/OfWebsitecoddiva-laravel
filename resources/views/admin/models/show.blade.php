@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Show Model</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('models.index') }}"> Back</a>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <div class="form-group">
                    <strong>Name:</strong><br>
                    <span class="h3">{{ $model->name }}</span>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <div class="col-12 col-md-6 mt-3">
                        <img src="{{asset('upload/models/'.$model->image)}}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
