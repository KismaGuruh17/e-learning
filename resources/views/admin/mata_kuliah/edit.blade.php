@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 d-flex justify-content-between">
                    <h1 class="m-0">{{ __('Edit Mata Pelajaran') }}</h1>
                    <a href="{{ route('admin.mata_kuliah.index') }}" class="btn btn-primary"> <i class="fa fa-arrow-left"></i> </a>
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
                        <form method="post" action="{{ route('admin.mata_kuliah.update', ['mata_kuliah' => $mata_kuliah]) }}" enctype="multipart/form-data">
                            @csrf 
                            @method('put')
                            <div class="form-group row border-bottom pb-4">
                                <label for="nama_mata_kuliah" class="col-sm-2 col-form-label">NAMA MATA PELAJARAN</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_mata_kuliah"
                                        value="{{ old('nama_mata_kuliah', $mata_kuliah->nama_mata_kuliah) }}" id="nama_mata_kuliah" placeholder="Nama Mata Pelajaran">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="sks" class="col-sm-2 col-form-label">SKS</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="sks" id="sks">
                                        @for ($i = 1; $i <= 6; $i++)
                                            <option {{ old('sks', $mata_kuliah->sks) == $i ? 'selected' : '' }} value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="semester" class="col-sm-2 col-form-label">SEMESTER</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="semester" id="semester">
                                        <option {{ old('semester', $mata_kuliah->semester) == 1 ? 'selected' : '' }} value="1">Ganjil</option>
                                        <option {{ old('semester', $mata_kuliah->semester) == 2 ? 'selected' : '' }} value="2">Genap</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="kelas" class="col-sm-2 col-form-label">KELAS</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kelas" value="{{ old('kelas', $mata_kuliah->kelas) }}" id="kelas" placeholder="Kelas">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="materi" class="col-sm-2 col-form-label">MATERI</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="materi" id="materi">
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
