<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class kategoriController extends Controller
{
    public function daftar(Request $req)
    {
    	$data = Kategori::where('nama_kategori','like',"%{$req->keywoard}%")
    		->paginate(10);

    	return view('admin.pages.kategori.daftar',['data'=>$data]);
    }

    public function add()
    {
    	return view('admin.pages.kategori.add');
    }

    public function save(Request $req)
    {
    	return 'Fungsi Save';
    }
}
