<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class dosencontroller extends Controller
{
    public function awal()
    {
    	return "Hello dari dosencontroller";
}
	public function tambah()
	{
		return $this->simpan();
}
	public function simpan()
	{
		$dosen = new dosen();
		$dosen->nama = "Prayogo Nugroho Molet";
		$dosen->nip = "1515015073";
		$dosen->alamat = "Jln.Kemakmuran";
		$dosen->pengguna_id = 3;
		$dosen->save();
		return "Data dosen dengan nama {$dosen->nama} telah disimpan";
		}
	}
	