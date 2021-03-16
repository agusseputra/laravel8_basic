<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $title="Data Mahasiswa";
        $data['mahasiswa']=array(
            'nim'=>'0999188199',
            'nama'=>'Agus Seputra'
        );
        $data['user']='';
        return view('admin.beranda', compact('title','data'));
    }
    public function dasboard(){
        $title="Data Dasboard";        
        return view('admin.dasboard', compact('title'));
    }
}
