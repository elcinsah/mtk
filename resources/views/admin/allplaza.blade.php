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

                                    <th>name</th>
                                    <th>adres</th>
                                    <th>mtk-name</th>

                                    <th>op</th>

                                </tr>

                                </thead>
                                <tbody>

                                @foreach($plaza as $plazas)


                                    <tr>
                                        <td>{{$plazas->name}}</td>
                                        <td>{{$plazas->address}}</td>
                                        <td>{!!$plazas->mtk =="" ? "<span class='text-danger'>no data</span>":$plazas->mtk->name !!}</td>


                                        <td>
                                            <a href="{{route('plaza.add')}}" title="yarat" class="btn btn-sm btn-primary"><i
                                                    class="fa fa-plus"></i></a>
                                            <a href="{{route('plaza.del',$plazas->id)}}" title="sil" class="btn btn-sm btn-danger"><i
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
