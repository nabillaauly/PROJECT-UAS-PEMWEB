<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use App\Models\Brand;


class DashboardController extends Controller {

    public function index() {
        
        $brand= Brand::count();
        $kriteria= Kriteria::count();
        $alternatif= Alternatif::count();
        

        return view('main',[
            'title' => 'Dashboard'
        ], compact('brand','kriteria','alternatif'))
        ;

        

        
    }
    
}
