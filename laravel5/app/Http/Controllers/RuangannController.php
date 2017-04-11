<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ruangann;

class RuangannController extends Controller
{
      public function awal()
    {
    	// return "Selamat Datang di Ruangan Belajar. Pilih yang fasilitasnya lengkap ya. Ganbatte :)";
        return view ('ruangann.awal',['data'=>ruangann::all()]);
    }

     public function tambah()
  	{
   		return view ('ruangann.tambah');
    }

    public function simpan(Request $input)
    {
    	$ruangann = new ruangann();
    	$ruangann->title=$input->title;
    	$informasi = $ruangann->save() ? 'Berhasil simpan data' : 'Gagal Simpan Data';
    	return redirect('ruangann')->with(['informasi'=>$informasi]);
    }

	public function edit($id)
	{
		$ruangann = ruangann::find($id);
		return view('ruangann.edit')->with(array('rungann'=>$ruangann));
	}

	public function lihat($id)
	{
		$ruangann = ruangann::find($id);
		return view('ruangann.edit')->with(array('ruangann'=>$ruangann));
	}

	public function update($id, Request $input)
	{
		$ruangann = new ruangann($id);
    	$ruangann->title = $input->title;
    	$informasi = $ruangann->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
		return redirect('ruangann')->with(['informasi'=>$informasi]);	
  }
 public function hapus($id)
   {
    $ruangann = ruangann::find($id);
    $informasi = $ruangann->delete() ? 'Berhasil hapus data' : 'Gagal simpan data';
  return redirect('ruangann')->with(['informasi'=>$informasi]);
   }
}