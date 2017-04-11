<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class JadwalKuliahController extends Controller
{
     public function awal()
    {
    	return "Hello dari JadwalKuliahController";
   	}
     public function tambah()
  	{
   	return $this->simpan();
    }
    public function simpan()
    {
    	$JadwalMatakuliah = new JadwalMatakuliah();
    	$JadwalMatakuliah->mahasiswa_id = '1';
    	$JadwalMatakuliah->ruangann_id = '2';
        $JadwalMatakuliah->DosenMatakuliah = '2';
        $JadwalMatakuliah->save();
   	return "Data Jadwal kuliah telah disimpan";
   }
}
