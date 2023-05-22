@extends('admin.layout')
@section('content')
    <div class="container">

        <form action="{{route('post.mtk')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">mtk_name:</label>
                <input type="text" class="form-control" id="name" name="name" value="" required>
            </div>



            <button type="submit" class="btn btn-default">gonder</button>
        </form>

    </div>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">




    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#summernote').summernote(
                {
                    height: 300
                }
            );
        });

    </script>


@endsection
