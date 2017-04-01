<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;

class DosenController extends Controller
{
     public function awal(){
    	return "Hello dari DosenController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$dosen = new Dosen();
    	$dosen->nama = "Prayogo Nugroho Molet";
    	$dosen->nip = "1515015073";
    	$dosen->alamat = "Jln Kemakmuran";
    	$dosen->pengguna_id = 3;
    	$dosen->save();
    	return "Data Dosen dengan Nama {$dosen->nama} telah disimpan";
}
public function Dosen(){
            $Dosen = Dosen::find(1);

            echo "Nama: ".$Dosen->nama;
            echo "<br>";
            echo "Username ".$Dosen->pengguna->username;
    }
}