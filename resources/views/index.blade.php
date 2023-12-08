@extends('layouts.header')

@section('content')
    <div class="container">
        <span class="line top_line"></span>
        <h2 class="content_title mb-0">MODELS</h2>
        <span class="line bottom_line"></span>
        <div id="flexbox">
            @foreach($models->chunk(ceil($models->count() / 4)) as $columnModels)
                <div class="column">
                    @foreach($columnModels as $model)
                        <img src="{{ asset('upload/models/' . $model->image) }}" class="img-fluid" alt="Image"/>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
@endsection
