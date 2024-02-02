@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Add New About</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('about.index') }}"> Back</a>
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

        <div class="col-12">
            <form action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data" class="mt-3">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <strong>Title:</strong>
                            <input type="text" name="title" class="form-control" placeholder="Title">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <strong>Image:</strong>
                            <input type="file" name="image" class="form-control" placeholder="Image">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <strong>Text One:</strong><br>
                            <textarea name="text_one"  id="text" class="form-control" placeholder="text"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <strong>Text Two:</strong><br>
                            <textarea name="text_two"  id="text1" class="form-control" placeholder="text"></textarea>
                        </div>
                    </div>
                    <div class="col-12 text-center mt-3">
                        <button type="submit" class="btn btn-success">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        ClassicEditor.create(document.querySelector("#text"), {
            toolbar: {
                items: [
                    'undo', 'redo',
                    '|', 'heading',
                    '|', 'fontfamily', 'fontsize', 'fontColor', 'fontBackgroundColor',
                    '|', 'bold', 'italic', 'strikethrough', 'subscript', 'superscript', 'code',
                    '|', 'link', 'codeBlock',
                    '|', 'bulletedList', 'numberedList', 'todoList',
                ],
                shouldNotGroupWhenFull: false
            }
        }).catch((error) => {
            console.error(error);
        });
        ClassicEditor.create(document.querySelector("#text1"), {
            toolbar: {
                items: [
                    'undo', 'redo',
                    '|', 'heading',
                    '|', 'fontfamily', 'fontsize', 'fontColor', 'fontBackgroundColor',
                    '|', 'bold', 'italic', 'strikethrough', 'subscript', 'superscript', 'code',
                    '|', 'link', 'codeBlock',
                    '|', 'bulletedList', 'numberedList', 'todoList',
                ],
                shouldNotGroupWhenFull: false
            }
        }).catch((error) => {
            console.error(error);
        });
    </script>
@endsection
