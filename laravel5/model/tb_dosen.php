<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_dosen extends Model
{
    protected $table = 'tb_dosen';
	
	public function pengguna();
	{
		return this->belongsTo(pengguna::class);
	}
	public function tb_dosen_mk();
	{
		return this->hasMany(tb_dosen_mk::class);
	}

}
