@extends('admin.layout')
@section('content')
    <div class="container">

        <form action="{{route("post.plaza")}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">name:</label>
                <input type="text" class="form-control" id="name" name="name" value="" required>
            </div>

            <div class="form-group">
                <label for="address">address:</label>
                <input type="text" class="form-control" id="address" name="address" value="" required>
            </div>



            <div class="form-group">
                <label for="mtk_id">mtk:</label>
                <select class="form-control" name="mtk_id">

                    @foreach($mtk as $mtks)

                        <option value="{{$mtks->id}}">{{$mtks->name}}</option>
                    @endforeach
                </select>
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
