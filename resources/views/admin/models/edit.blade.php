@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Model</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('models.index') }}"> Back</a>
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
        <div class="col-12 col-md-6">
            <form action="{{ route('models.update',$model->id) }}" method="POST" enctype="multipart/form-data"
                  class="mt-3">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input type="text" name="name" value="{{ $model->name }}" class="form-control"
                                   placeholder="Name">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Image:</strong>
                            <input type="file" name="image" class="form-control" placeholder="Image">
                            <img src="{{asset('upload/models/'.$model->image)}}" width="300px">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Image 1:</strong>
                            <input type="file" name="image1" class="form-control" placeholder="Image 1">
                            <img src="{{asset('upload/models/'.$model->image1)}}" width="300px">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <strong>Info:</strong>
                            <input type="text" name="info" value="{{ $model->info }}" class="form-control" placeholder="Info" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-md-3">
                            <div class="form-group">
                                <strong>Height:</strong>
                                <input type="text" name="height" value="{{ $model->height }}" class="form-control" placeholder="Height" required>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="form-group">
                                <strong>Bust:</strong>
                                <input type="text" name="bust" value="{{ $model->bust }}" class="form-control" placeholder="Bust" required>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="form-group">
                                <strong>Waist:</strong>
                                <input type="text" name="waist" value="{{ $model->waist }}" class="form-control" placeholder="Waist" required>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="form-group">
                                <strong>Hip:</strong>
                                <input type="text" name="hip" value="{{ $model->hip }}" class="form-control" placeholder="Hip" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <strong>Description:</strong>
                            <textarea name="description" rows="10" class="form-control" placeholder="Description" required>
                                {{ $model->description }}
                            </textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <strong>Description 1:</strong>
                            <textarea name="description1" rows="10" class="form-control" placeholder="Description 1" required>
                                {{ $model->description1 }}
                            </textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <strong>Description 2:</strong>
                            <textarea name="description2" rows="10" class="form-control" placeholder="Description 2" required>
                                {{ $model->description2 }}
                            </textarea>
                        </div>
                    </div>
                    <div class="col-12 mt-3 text-center">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
