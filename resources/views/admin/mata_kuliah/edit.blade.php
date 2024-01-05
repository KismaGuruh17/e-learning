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
                        <form method="post" action="{{ route('admin.mata_kuliah.update', [$mata_kuliah]) }}">
                            @csrf 
                            @method('put')
                            <div class="form-group row border-bottom pb-4">
                                <label for="nama_mata_kuliah" class="col-sm-2 col-form-label">NAMA MATA PELAJARAN</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_mata_kuliah" value="{{ old('nama_mata_kuliah', $mata_kuliah->nama_mata_kuliah) }}" id="nama_mata_kuliah">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="sks" class="col-sm-2 col-form-label">SKS</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="sks" id="sks">
                                        <option {{ $mata_kuliah->sks == 1 ? 'selected' : null }} value="1">1</option>
                                        <option {{ $mata_kuliah->sks == 2 ? 'selected' : null }} value="2">2</option>
                                        <option {{ $mata_kuliah->sks == 3 ? 'selected' : null }} value="3">3</option>
                                        <option {{ $mata_kuliah->sks == 4 ? 'selected' : null }} value="4">4</option>
                                        <option {{ $mata_kuliah->sks == 5 ? 'selected' : null }} value="5">5</option>
                                        <option {{ $mata_kuliah->sks == 6 ? 'selected' : null }} value="6">6</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="semester" class="col-sm-2 col-form-label">SEMESTER</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="semester" id="semester">
                                        <option {{ $mata_kuliah->semester == 1 ? 'selected' : null }} value="Ganjil">Ganjil</option>
                                        <option {{ $mata_kuliah->semester == 2 ? 'selected' : null }} value="Genap">Genap</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="program_study_id" class="col-sm-2 col-form-label">KELAS</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_mata_kuliah" value="{{ old('nama_mata_kuliah') }}" id="nama_mata_kuliah">
                                </div>
                            </div>
                            <div class="form-group row border-bottom pb-4">
                                <label for="program_study_id" class="col-sm-2 col-form-label">MATERI</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="file" value="{{ old('file') }}" id="file">
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