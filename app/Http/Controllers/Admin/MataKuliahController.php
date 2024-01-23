<?php

namespace App\Http\Controllers\Admin;

use App\Models\MataKuliah;
use App\Models\ProgramStudy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MataKuliahController extends Controller
{
    public function index()
    {
        $data_mata_kuliah = MataKuliah::with('program_study')->get();
        return view('admin.mata_kuliah.index', compact('data_mata_kuliah'));
    }

    public function create()
    {
        $program_studies = ProgramStudy::get(['id', 'nama_prody']);
        return view('admin.mata_kuliah.create', compact('program_studies'));
    }

    public function store(Request $request)
    {
        $namaFile = $request->file('materi')->store('materi');

        MataKuliah::create([
            'nama_mata_kuliah' => $request->nama_mata_kuliah,
            'sks' => $request->sks,
            'semester' => $request->semester,
            'kelas' => $request->kelas,
            'materi' => $namaFile
        ]);

        return redirect()->route('admin.mata_kuliah.index')->with([
            'message' => 'Berhasil dibuat!',
            'alert-type' => 'success'
        ]);
    }

    public function edit($id)
    {
        $mata_kuliah = MataKuliah::find($id);

        if (!$mata_kuliah) {
            return redirect()->route('admin.mata_kuliah.index')->with([
                'message' => 'Mata kuliah tidak ditemukan',
                'alert-type' => 'danger'
            ]);
        }

        return view('admin.mata_kuliah.edit', compact('mata_kuliah'));
    }

    public function update(Request $request, $id)
    {
        $mata_kuliah = MataKuliah::find($id);

        if (!$mata_kuliah) {
            return redirect()->route('admin.mata_kuliah.index')->with([
                'message' => 'Mata kuliah tidak ditemukan',
                'alert-type' => 'danger'
            ]);
        }

        $namaFile = $request->file('materi')->store('materi');

        $mata_kuliah->update([
            'nama_mata_kuliah' => $request->nama_mata_kuliah,
            'sks' => $request->sks,
            'semester' => $request->semester,
            'kelas' => $request->kelas,
            'materi' => $namaFile
        ]);

        return redirect()->route('admin.mata_kuliah.index')->with([
            'message' => 'Berhasil diupdate!',
            'alert-type' => 'info'
        ]);
    }

    public function destroy(MataKuliah $mata_kuliah)
    {
        $mata_kuliah->delete();

        return redirect()->route('admin.mata_kuliah.index')->with([
            'message' => 'Berhasil dihapus!',
            'alert-type' => 'danger'
        ]);
    }
}
