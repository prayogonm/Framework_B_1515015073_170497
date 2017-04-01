<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'Dosen';
	//digunakan untuk mendefinikan nama table
	//protected $fillable=['nama','nip','alamat','pengguna_id'];

	public function pengguna()/// fungsi dengan nama pengguna
	{
		return $this->belongsTo(pengguna::class);//fungsi pengguna yang mempunyai nilai return dari fungsi belongsTo yang merelasikan tabel pengguna dengan model dosen
	}
	public function Dosen_matakuliah()//fungsi dengan nama dosen_matakuliah
	{
		return $this->hasMany(Dosen_matakuliah::class,'dosen_id');//// model dosen_matakuliah yang mempunyai nilai return dari fungsi hasMany yang merelasikan dosen dengan banyak dosen_matakuliah dengan dosen_id sebagai foreign key nya
	}

}