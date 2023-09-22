<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index(){

        $nama = "Nadhir Adhitya Zhalifunnas";
        $umur = "20 Tahun";
        $tempat= "Bogor";
        $hobi = "Basketball";
        
        $data['nama'] = $nama;
        $data['umur'] = $umur;
        $data['tempat'] = $tempat;
        $data['hobi'] = $hobi;

        return view('profile.index', $data);
    }
}
