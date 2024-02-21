@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Blogs</h2>
                </div>
            </div>
        </div>

        <a href="{{route("blogs.create")}}" class="btn btn-success">Add Blog</a>

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
                <th>Views</th>
                <th width="280px">Action</th>
            </tr>

            @foreach ($blogs as $blog)
                <tr>
                    <td>{{$i++ + 1}}</td>
                    <td>
                        <img src="{{asset('upload/blogs/'.$blog->blog_image)}}" width="100px">
                    </td>
                    <td>{{ $blog->blog_title }}</td>
                    <td>0</td>
                    <td>
                        <form action="{{ route('blogs.destroy',$blog->id) }}" method="POST">
                            <a class="btn btn-success" href="{{ route('blogs.show',$blog->id) }}">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a class="btn btn-primary" href="{{ route('blogs.edit',$blog->id) }}">
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
        {!! $blogs->links('vendor.pagination.bootstrap-5') !!}
    </div>
@endsection
