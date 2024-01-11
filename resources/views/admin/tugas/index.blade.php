@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 justify-content-between d-flex">
                    <h1 class="m-0">{{ __('Tugas') }}</h1>
                    <a href="{{ route('admin.tugas.create') }}" class="btn btn-primary btn-sm"> <i
                            class="fa fa-plus"></i> </a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body p-0">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NAMA MATA PELAJARAN</th>
                                        <th>KELAS</th>
                                        <th>DESKRIPSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tugas as $t)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $t->nama_mata_pelajaran }}</td>
                                            <td>{{ $t->kelas }}</td>
                                            <td>{{ $t->deskripsi }}</td>
                                            <td>
                                            @foreach($tugas as $t)
                                                <div class="btn-group">
                                                    <a href="{{ route('admin.tugas.edit', ['id' => $t->id]) }}" class="btn btn-sm btn-info"> <i class="fa fa-edit"></i> Edit</a>
                                                    
                                                    <form action="{{ route('admin.tugas.destroy', ['id' => $t->id]) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> Hapus</button>
                                                    </form>
                                                </div>
                                            @endforeach

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection

// SUdah commit