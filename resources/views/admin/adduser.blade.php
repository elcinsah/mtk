@extends('admin.layout')
@section('content')
    <div class="container">

        <form action="{{route('user.post')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">name:</label>
                <input type="text" class="form-control" id="name" name="name" value="" required>
            </div>

            <div class="form-group">
                <label for="email">email:</label>
                <input type="email" class="form-control" id="email" name="email" value="" required>
            </div>



            <div class="form-group">
                <label for="pass">password:</label>
                <input type="password" class="form-control" id="pass" name="pass" value="" required>

            </div>
            <div class="form-group">
                <label for="rolel">role: admin:(1) user:(0)</label>
                <input type="number" class="form-control" id="role" name="role" value="" max="1" required>
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
