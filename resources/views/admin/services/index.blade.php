@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Services</h2>
                </div>
            </div>
        </div>

        <a href="{{route("services.create")}}" class="btn btn-success">Add Service</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered mt-3">
            <tr>
                <th>No</th>
                <th>Image</th>
                <th>Title</th>
                <th width="280px">Action</th>
            </tr>

            @foreach ($services as $service)
                <tr>
                    <td>{{$i++ + 1}}</td>
                    <td>
                        <img src="{{asset('upload/services/'.$service->image)}}" width="100px">
                    </td>
                    <td>{{ $service->title }}</td>
                    <td>
                        <form action="{{ route('services.destroy',$service->slug) }}" method="POST">
                            <a class="btn btn-success" href="{{ route('services.show',$service->slug) }}">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a class="btn btn-primary" href="{{ route('services.edit',$service->slug) }}">
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
        {!! $services->links('vendor.pagination.bootstrap-5') !!}
    </div>
@endsection
