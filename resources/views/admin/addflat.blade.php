@extends('admin.layout')
@section('content')
    <div class="container">

        <form action="{{route("flat.post")}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">flat_no:</label>
                <input type="text" class="form-control" id="flat_no" name="flat_no" value="" required>
            </div>

            <div class="form-group">
                <label for="email">flour count:</label>
                <input type="number" class="form-control" id="flour" name="flour" value="" required max="30">
            </div>
            <div class="form-group">
                <label for="category">plaza:</label>
                <select class="form-control" name="plaza">

                    @foreach($plaza as $plazas)

                        <option value="{{$plazas->id}}">{{$plazas->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="category">users:</label>
                <select class="form-control" name="useplaza">

                    @foreach($user as $users)

                        <option value="{{$users->id}}">{{$users->name}}</option>
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
