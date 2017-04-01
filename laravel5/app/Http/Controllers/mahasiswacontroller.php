<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Pengguna;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
     public function awal(){
     	return "Hello dari MahasiswaController";
     }
     public function tambah(){
     	return $this->simpan();
     }
     public function simpan(){
     	$mahasiswa = new Mahasiswa();
     	$mahasiswa->nama = "Prayogo Nugroho Molet";
     	$mahasiswa->nim = "1515015073";
     	$mahasiswa->alamat = "Kemakmuran gg pln";
     	$mahasiswa->pengguna_id = 3;
    	$mahasiswa->save();
     	return "Data Mahasiswa dengan Nama {$mahasiswa->nama} telah disimpan";

     }
        public function mahasiswa(){
            $mahasiswa = mahasiswa::find(1);

            echo "Nama: ".$mahasiswa->nama;
            echo "<br>";
            echo "Username ".$mahasiswa->pengguna->username;
    }
}