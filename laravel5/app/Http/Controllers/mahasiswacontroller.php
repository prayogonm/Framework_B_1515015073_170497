<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\mahasiswa;

class mahasiswacontroller extends Controller
{
    public function awal(){
    	return "Hello dari MahasiswaController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan()
    {
    	$mahasiswa = new Mahasiswa();
    	$mahasiswa->nama = "Prayogo Nugroho Molet";
    	$mahasiswa->nim = "1515015073";
    	$mahasiswa->alamat = "JLn kemakmuran";
    	$mahasiswa->pengguna_id = 3;
    	$mahasiswa->save();
    	return "Data Mahasiswa dengan Nama {$mahasiswa->nama} telah disimpan";
	}
}