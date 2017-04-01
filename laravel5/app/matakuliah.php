<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
	public function dosen_matakuliah(){// fungsi dengan nama dosen_matakuliah
    	return $this->hasMany(DosenMataKuliah::class,
    	'matakuliah_id');// memberikan nillai return dari fungsi hasMany yang merelasikan matakuliah dengan banyak dosen_matakuliah dengan foreign key matakuliah_id
    }
    protected $table = 'Matakuliah';
    // mendeklarasikan tabel matakuliah
   // protected $fillable = ['title','keterangan'];
}

