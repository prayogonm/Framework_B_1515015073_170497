<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\ruangan;

class ruangancontroller extends Controller
{
    public function awal(){
    	return "Hello dari ruangancontroller";
}
	public function tambah(){
		return $this->simpan();
	}
	public function simpan(){
		$ruangan = new ruangan();
		$ruangan->title = "ruangan 411";
		$ruangan->save();
		return "Data ruangan dengan nama {$ruangan->title} telah disimpan";
	}
}
