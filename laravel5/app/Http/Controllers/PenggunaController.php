<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\pengguna;

class PenggunaController extends Controller
{
   public function awal()
{
	return "Hello dari penggunacontroller";
}
	public function tambah()
{
	return $this->simpan();
}
	public function simpan()
	{
		$pengguna = new pengguna();
		$pengguna->username='Prayogo Nugroho Molet';
		$pengguna->password='mollet';
		$pengguna->save();
		return "date dengan username {$pengguna->username} telah disimpan";
	}
}
