@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 d-flex justify-content-between">
                    <h1 class="m-0">{{ __('Tambah Tugas') }}</h1>
                    <a href="{{ route('admin.program_study.index') }}" class="btn btn-primary"> <i class="fa fa-arrow-left"></i> </a>
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
                    <div class="card p-3">
                        <form method="post" action="{{ route('admin.tugas.store') }}">
                            @csrf 
                            <div class="form-group row border-bottom pb-4">
                                <label for="nama_mata_pelajaran" class="col-sm-2 col-form-label">Nama Mata Pelajaran</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_mata_pelajaran" value="{{ old('nama_mata_pelajaran') }}" id="nama_mata_pelajaran">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="kelas" class="col-sm-2 col-form-label">Nama Kelas</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="kelas" value="{{ old('kelas') }}" id="kelas">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="deskripsi" value="{{ old('deskripsi') }}" id="deskripsi">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection