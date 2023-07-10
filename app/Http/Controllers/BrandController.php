<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller {

    public function index() {
        return view('databrand', [
            'users' => Brand::all(), 
            'title' => 'Data brand'
        ]);
    }
    
    public function add() {
        return view('adddatabrand',[
            'title' => 'Tambah Data brand'
        ]);
    }
    public function edit($id){
        
        $brand = Brand::where('id', $id)->first();

        return view('editdatabrand', [
            'brand' => $brand,
            'title' => 'Edit Data brand'
        ]);

    }

    public function update(Request $request, $id) {
        $nama_brand     = $request->input('nama_brand');
        $nama_barang       = $request->input('nama_barang');
        $kode_barang   = $request->input('kode_barang');
        $jenis = $request->input('jenis');
        
        $brand = Brand::where('id', $id)->first();
        $brand->nama_brand   = $nama_brand;
        $brand->nama_barang     = $nama_barang;
        $brand->kode_barang = $kode_barang;
        $brand->jenis = $jenis;

        $brand->save();

        return redirect()->to('/brand');
    }


    public function dashboard(){
        $brand= Brand::count();

        return view('main', compact('brand'));

    }

    public function store(Request $request) {
        $nama_brand     = $request->input('nama_brand');
        $nama_barang       = $request->input('nama_barang');
        $kode_barang   = $request->input('kode_barang');
        $jenis = $request->input('jenis');
        
        $brand           = new Brand;
        $brand->nama_brand   = $nama_brand;
        $brand->nama_barang     = $nama_barang;
        $brand->kode_barang = $kode_barang;
        $brand->jenis = $jenis;

        $brand->save();

        return redirect()->to('/brand');
    }
    public function delete($id) {
        $brand = Brand::where('id', $id)->first();
        $brand->delete();
        return redirect()->back();
    }

    public function search(Request $request){
        if($request->has('search')){
            $brand = Brand::where('nama','berat_badan','tinggi_badan','stamina','event','kejuaraan','%',$request->search.'%')->get();
        }else{
            $brand = Brand::all();
        }
        return view('databrand',['Brand' => $brand]);
    }
}
