@extends('admin.layout')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with minimal features & hover style</h3>
                        </div>

                    </div>


                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>


                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>

                                <tr>


                                    <th>flat_no</th>
                                    <th>flat_flour</th>
                                    <th>plaza_name</th>

                                    <th>op</th>

                                </tr>

                                </thead>
                                <tbody>

                                @foreach($flat as $flats)

                                    <tr>
                                        <td>{{$flats->flat_no}}</td>
                                        <td>{{$flats->flat_flour}}</td>
                                        <td>{{$flats->plaza->name}}</td>


                                        <td>
                                            <a href="{{route('flat.add')}}" title="yarat" class="btn btn-sm btn-primary"><i
                                                    class="fa fa-plus"></i></a>
                                            <a href="{{route("flat.del",$flats->id)}}" title="sil" class="btn btn-sm btn-danger"><i
                                                    class="fa fa-times"></i></a>
                                        </td>


                                    </tr>
                                @endforeach

                                </tbody>


                            </table>
                        </div>

                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>

@endsection
