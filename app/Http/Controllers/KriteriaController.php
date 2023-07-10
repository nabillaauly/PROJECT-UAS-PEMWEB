<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller {

    public function index() {
        return view('datakriteria', [
            'users' => Kriteria::all(),
            'title' => 'Data kriteria'
        ]);
    }
    public function add() {
        return view('adddatakriteria',[
            'title' => 'Tambah Data kriteria'
        ]);
    }
    public function edit($id){
        
        $kriteria = Kriteria::where('id', $id)->first();

        return view('editkriteria', [
            'kriteria' => $kriteria,
            'title' => 'Edit Data kriteria'
        ]);

    }

    public function update(Request $request, $id) {
        $kode_kriteria      = $request->input('kode_kriteria');
        $nama_kriteria       = $request->input('nama_kriteria');
        $bobot   = $request->input('bobot');
        $jenis = $request->input('jenis');
        
        $kriteria = Kriteria::where('id', $id)->first();
        $kriteria->kode_kriteria    = $kode_kriteria;
        $kriteria->nama_kriteria    = $nama_kriteria;
        $kriteria->bobot = $bobot;
        $kriteria->jenis = $jenis;

        $kriteria->save();

        return redirect()->to('/kriteria');
    }


    public function dashboard(){
        $kriteria= Kriteria::count();

        return view('main', compact('kriteria'));

    }

    public function store(Request $request) {
        $kode_kriteria     = $request->input('kode_kriteria');
        $nama_kriteria       = $request->input('nama_kriteria');
        $bobot   = $request->input('bobot');
        $jenis = $request->input('jenis');

        $kriteria           = new Kriteria;
        $kriteria->kode_kriteria    = $kode_kriteria;
        $kriteria->nama_kriteria     = $nama_kriteria;
        $kriteria->bobot = $bobot;
        $kriteria->jenis = $jenis;

        $kriteria->save();

        return redirect()->to('/kriteria');
    }
    public function delete($id) {
        $kriteria = Kriteria::where('id', $id)->first();
        $kriteria->delete();
        return redirect()->back();
    }
}
