@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Add New Model</h2>
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
            <form action="{{ route('models.store') }}" method="POST" enctype="multipart/form-data" class="mt-3">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <strong>Image:</strong>
                            <input type="file" name="image" class="form-control" placeholder="image" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <strong>Image 1:</strong>
                            <input type="file" name="image1" class="form-control" placeholder="image 1" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <strong>Info:</strong>
                            <input type="text" name="info" class="form-control" placeholder="Info" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-md-3">
                            <div class="form-group">
                                <strong>Height:</strong>
                                <input type="text" name="height" class="form-control" placeholder="Height" required>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="form-group">
                                <strong>Bust:</strong>
                                <input type="text" name="bust" class="form-control" placeholder="Bust" required>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="form-group">
                                <strong>Waist:</strong>
                                <input type="text" name="waist" class="form-control" placeholder="Waist" required>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="form-group">
                                <strong>Hip:</strong>
                                <input type="text" name="hip" class="form-control" placeholder="Hip" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <strong>Description:</strong>
                            <textarea name="description" rows="10" class="form-control" placeholder="Description" required></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <strong>Description 1:</strong>
                            <textarea name="description1" rows="10" class="form-control" placeholder="Description 1" required></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <strong>Description 2:</strong>
                            <textarea name="description2" rows="10" class="form-control" placeholder="Description 2" required></textarea>
                        </div>
                    </div>
                    <div class="col-12 text-center mt-3">
                        <button type="submit" class="btn btn-success">Add</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection
