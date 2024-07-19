@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Show Service</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('services.index') }}"> Back</a>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <div class="form-group">
                    <strong class="text-danger">Title:</strong><br>
                    <span class="">{{ $service->title }}</span>
                </div>
            </div>
            <hr>
            <div class="col-12">
                <div class="form-group">
                    <strong class="text-danger">Description:</strong><br>
                    {!! html_entity_decode($service->description) !!}
                </div>
            </div>
            <hr>
            <div class="col-12">
                <div class="form-group">
                    <strong class="text-danger">Text:</strong><br>
                    {!! html_entity_decode($service->text) !!}
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="form-group">
                        <strong class="text-danger">Image:</strong>
                        <div class="col-12 col-md-6 mt-3 text-center">
                            <img src="{{asset('upload/services/'.$service->image)}}" width="150" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
