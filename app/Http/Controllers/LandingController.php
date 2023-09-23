<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    //

    public function index(){

        $welcomeMessage = 'Halo Apakabar Semuanya!';

        $data['welcomeMessage'] = $welcomeMessage;

        return view ('landing.index', $data);
    }

    public function infoCampus(){

        return view('landing.info-campus');
    }
}
