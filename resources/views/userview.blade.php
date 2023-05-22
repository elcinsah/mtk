@extends('admin.layout')
@section('content')
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">User Detail</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                        <br>
                        <div class="text-muted">
                            <ul class="list-unstyled">
                                <li>Name: {{ $user->name }}</li>
                                <li>Email: {{ $user->email }} </li>
                            </ul>
                        </div>

                        <h5 class="mt-5 text-muted">Flats</h5>
                        <ul class="list-unstyled">
                            @if(count($user->flats))
                                @foreach($user->flats as $flat)
                                    <li>
                                        Mtk: {{ $flat->plaza->mtk->name }}
                                    </li>
                                    <li>
                                        Plaza name: {{ $flat->plaza->name }}
                                    </li>
                                    <li>
                                        Plaza address: {{ $flat->plaza->address }}
                                    </li>
                                    <li>
                                        Flat No: {{ $flat->flat_no }}
                                    </li>
                                    <li>
                                        Flat Floor: {{ $flat->flat_flour }}
                                    </li>
                                @endforeach
                            @else
                                <li>
                                    Flat not found
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>

@endsection
