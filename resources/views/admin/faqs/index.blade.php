@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>FAQs</h2>
                </div>
            </div>
        </div>

        <a href="{{route("faqs.create")}}" class="btn btn-success">Add FAQ</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered mt-3">
            <tr>
                <th>Question</th>
                <th>Answer</th>
                <th width="110px">Action</th>
            </tr>

            @foreach ($faqs as $faq)
                <tr>
                    <td>{{ $faq->question }}</td>
                    <td>{{ $faq->answer }}</td>
                    <td>
                        <form action="{{ route('faqs.destroy',$faq->id) }}" method="POST">
                            <a class="btn btn-primary" href="{{ route('faqs.edit',$faq->id) }}">
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

    </div>
@endsection
