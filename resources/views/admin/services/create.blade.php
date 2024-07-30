@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Add New Service</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('services.index') }}"> Back</a>
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
            <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data" class="mt-3">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <strong>Title:</strong>
                            <input type="text" name="title" class="form-control" placeholder="Title">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <strong>Description:</strong><br>
                            <textarea name="description" id="blog_description" class="form-control" placeholder="Description"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <strong>Text:</strong><br>
                            <textarea name="text" id="description" class="form-control" placeholder="Text"></textarea>
                        </div>
                    </div>
                    <hr class="mt-3">
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <strong>Image:</strong>
                            <input type="file" name="image" class="form-control" placeholder="Image">
                        </div>
                    </div>
                    <hr class="mt-3">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <strong>Meta Title:</strong>
                                <input type="text" name="meta_title" class="form-control" placeholder="Meta Title">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <strong>Meta Description:</strong>
                                <textarea class="form-control" name="meta_description" placeholder="Meta Description">
                                </textarea>
                            </div>
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
        ClassicEditor.create(document.querySelector("#blog_description"), {
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
        ClassicEditor.create(document.querySelector("#description"), {
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
