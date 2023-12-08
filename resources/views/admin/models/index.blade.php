@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Models</h2>
                </div>
            </div>
        </div>

        <a href="{{route("models.create")}}" class="btn btn-success">Add Model</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered mt-3">
            <tr>
                <th>No</th>
                <th>Image</th>
                <th>Name</th>
                <th width="280px">Action</th>
            </tr>

            @foreach ($models as $model)
                <tr>
                    <td>{{$i++ + 1}}</td>
                    <td>
                        <img src="{{asset('upload/models/'.$model->image)}}" width="100px">
                    </td>
                    <td>{{ $model->name }}</td>
                    <td>
                        <form action="{{ route('models.destroy',$model->id) }}" method="POST">
                            <a class="btn btn-success" href="{{ route('models.show',$model->id) }}">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a class="btn btn-primary" href="{{ route('models.edit',$model->id) }}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {!! $models->links('vendor.pagination.bootstrap-5') !!}
    </div>
@endsection
