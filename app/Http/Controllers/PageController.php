<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'NIM : 2041720141 <br> Nama : Silvia Prada Aprilia';
    }

    public function articles($id){
        return 'Halaman Artikel dengan Id ' .$id;
    }
}
