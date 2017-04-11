<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    protected $table = 'pengguna';
	
	public function tb_dosen();
	{
		return this->hasOne(tb_dosen::class);
	}
	public function tb_mhs();
	{
		return this->hasOne(tb_mhs::class);
	}
	public function peran();
	{
		return this->belongsToMany(peran::class);
	}
}