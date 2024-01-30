@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>About</h2>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered mt-3">
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Text 1</th>
                <th>Text 2</th>
                <th>Action</th>
            </tr>

            @foreach ($about as $item)
                <tr>
                    <td>
                        <img src="{{asset('upload/about/'.$item->image)}}" width="100px">
                    </td>
                    <td>{{ $item->title }}</td>
                    <td>{!! html_entity_decode( $item->text_one) !!}</td>
                    <td>{!! html_entity_decode( $item->text_two) !!}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('about.edit',$item->id) }}">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
