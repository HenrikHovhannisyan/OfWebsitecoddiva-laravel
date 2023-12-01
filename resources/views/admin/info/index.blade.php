@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Info</h2>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered mt-3">
            @foreach ($infos as $info)
                <div class="row mt-3">
                    <div class="col-12 col-lg-4">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <strong>Facebook:</strong>
                                <a href="{{ $info->facebook }}" target="_blank"
                                   class="text-danger">{{ $info->facebook }}</a>
                            </li>
                            <li class="list-group-item">
                                <strong>Instagram:</strong>
                                <a href="{{ $info->instagram }}" target="_blank"
                                   class="text-danger">{{ $info->instagram }}</a>
                            </li>
                            <li class="list-group-item">
                                <strong>Pinterest:</strong>
                                <a href="{{ $info->pinterest }}" target="_blank"
                                   class="text-danger">{{ $info->pinterest }}</a>
                            </li>
                            <li class="list-group-item">
                                <strong>Email:</strong>
                                <span class="">{{ $info->email }}</span>
                            </li>
                            <li class="list-group-item">
                                <strong>Phone:</strong>
                                <span class="">{{ $info->phone }}</span>
                            </li>
                            <li class="list-group-item">
                                <strong>Contact:</strong>
                                <span class="">{{ $info->contact }}</span>
                            </li>
                            <li class="list-group-item">
                                <strong>Video:</strong>
                                <span class="">
                                    <iframe width="100%" height="100%"
                                            src="https://www.youtube.com/embed/{{ $info->video }}?si=Wl6aUbPRyiPO5VGE"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen>
                                    </iframe>
                                </span>
                            </li>
                            <li class="list-group-item text-end">
                                <form action="{{ route('info.destroy',$info->id) }}" method="POST">
                                    <a class="btn btn-primary" href="{{ route('info.edit',$info->id) }}">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                        Edit Info
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </table>

    </div>
@endsection
