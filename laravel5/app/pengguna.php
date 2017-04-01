<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'pengguna';// mendeklarasikan tabel pengguna
    	// protected $fillable=['username','password'];
	
	// public function Dosen()
	// {
	// 	return $this->hasOne(Dosen::class);
	// }
	public function mahasiswa()// fungsi dengan nama mahasiswa
	{
		return $this->hasOne(mahasiswa::class,
		'pengguna_id');// memberikan nilai return dari fungsi hasOne yang merelasikan pengguna dengan mahasiswa dengan foreign ket pengguna_id
	}
	// public function peran()
	// {
	// 	return $this->belongsToMany(peran::class);
	// }
}
