@extends('admin.layout')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header ">
                            <h3 class="card-title">Users</h3>
                        </div>

                    </div>


                    <div class="card">
                        <div class="card-header text-right">
                            <p>  <a href="{{route('user.add')}}" title="elave et"
                                    class="btn btn-sm btn-primary">Add User</a></p>
                        </div>


                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>

                                <tr>
                                    <th>id</th>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>role</th>
                                    <th>op</th>

                                </tr>

                                </thead>
                                <tbody>

                                @foreach($users as $user)

                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{!!$user->role==0 ? "<span class='text-danger'>user</span>":"<span class='text-success'>admin</span>" !!}</td>
                                        <td>
                                            <a href="{{route('user.del',$user->id)}}" title="sil" class="btn btn-sm btn-danger"><i
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
