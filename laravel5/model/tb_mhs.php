<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_mhs extends Model
{
    protected $table = 'tb_mhs';
	
	public function pengguna();
	{
		return this->belongsTo(pengguna::class);
	}
}
