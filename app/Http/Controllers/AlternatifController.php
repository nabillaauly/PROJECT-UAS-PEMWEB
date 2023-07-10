<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    public function index() {
        return view('dataalternatif', [
            'users' => Alternatif::all(),
            'title' => 'Data alternatif'
        ]);
    }
    public function add() {
        return view('adddataalternatif',[
            'title' => 'Tambah Data alternatif'
        ]);
    }
    public function edit($id){
        
        $alternatif = Alternatif::where('id', $id)->first();

        return view('editalternatif', [
            'alternatif' => $alternatif,
            'title' => 'Edit Data alternatif'
        ]);

    }

    public function update(Request $request, $id) {
        $kode_alternatif      = $request->input('kode_alternatif');
        $kriteria_1   = $request->input('kriteria_1');
        $kriteria_2 = $request->input('kriteria_2');
        $kriteria_3 = $request->input('kriteria_3');
        $kriteria_4 = $request->input('kriteria_4');
        $kriteria_5 = $request->input('kriteria_5');
        
        $alternatif = Alternatif::where('id', $id)->first();
        $alternatif->kode_alternatif    = $kode_alternatif;
        $alternatif->kriteria_1 = $kriteria_1;
        $alternatif->kriteria_2 = $kriteria_2;
        $alternatif->kriteria_3 = $kriteria_3;
        $alternatif->kriteria_4 = $kriteria_4;
        $alternatif->kriteria_5 = $kriteria_5;

        $alternatif->save();

        return redirect()->to('/alternatif');
    }


    public function dashboard(){
        $alternatif= Alternatif::count();

        return view('main', compact('alternatif'));

    }

    public function store(Request $request) {
        $kode_alternatif     = $request->input('kode_alternatif');
        $kriteria_1 = $request->input('kriteria_1');
        $kriteria_2 = $request->input('kriteria_2');
        $kriteria_3 = $request->input('kriteria_3');
        $kriteria_4 = $request->input('kriteria_4');
        $kriteria_5 = $request->input('kriteria_5');

        $alternatif           = new Alternatif;
        $alternatif->kode_alternatif    = $kode_alternatif;
        $alternatif->kriteria_1 = $kriteria_1;
        $alternatif->kriteria_2 = $kriteria_2;
        $alternatif->kriteria_3 = $kriteria_3;
        $alternatif->kriteria_4 = $kriteria_4;
        $alternatif->kriteria_5 = $kriteria_5;

        $alternatif->save();

        return redirect()->to('/alternatif');
    }
    public function delete($id) {
        $alternatif = Alternatif::where('id', $id)->first();
        $alternatif->delete();
        return redirect()->back();
    }
}
