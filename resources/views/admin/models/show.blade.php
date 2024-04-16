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
                <ul class="list-group col-12 col-md-6">
                    <li class="list-group-item"><strong>Name:</strong> {{ $model->name }}</li>
                    <li class="list-group-item"><strong>Info:</strong> {{ $model->info }}</li>
                    <li class="list-group-item"><strong>Height:</strong> {{ $model->height }}</li>
                    <li class="list-group-item"><strong>Bust:</strong> {{ $model->bust }}</li>
                    <li class="list-group-item"><strong>Waist:</strong> {{ $model->waist }}</li>
                    <li class="list-group-item"><strong>Hip:</strong> {{ $model->hip }}</li>
                </ul>

                <div class="form-group mt-3">
                    <strong>Description:</strong>
                    <p class="mt-3">
                        {{ $model->description }}
                    </p>
                </div>
                <div class="form-group">
                    <strong>Description 1:</strong>
                    <p class="mt-3">
                        {{ $model->description1 }}
                    </p>
                </div>
                <div class="form-group">
                    <strong>Description 2:</strong>
                    <p class="mt-3">
                        {{ $model->description2 }}
                    </p>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 mt-3">
                        <div class="form-group">
                            <strong>Image:</strong>
                            <img src="{{asset('upload/models/'.$model->image)}}" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mt-3">
                        <div class="form-group">
                            <strong>Image 1:</strong>
                            <img src="{{asset('upload/models/'.$model->image1)}}" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
