<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Jarvis;

class JarvisController extends Controller
{
    public function awal()
    {
    	return "Sudah Seesai Dari JarvisController";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$Jarvis = new Jarvis();
    	$Jarvis->username = 'Jarvis';
    	$Jarvis->password = 'jarvis1998';
    	$Jarvis->save();
    	return"Data Dengan Username {$Jarvis->username} Telah Disimpan";

    }
}
