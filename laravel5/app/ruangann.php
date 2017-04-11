<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruangann extends Model
{
    protected $table = 'ruangann';// mendeklarasikan tabel ruangann
    // protected $fillable=['title'];

    public function jadwalMatakuliah(){// fungsi dengan nama jadwal_matakuliah
    	return $this->hasMany(jadwalMatakuliah::class);// memberikan nilai return dari fungsi hasMany dengan merelasikan ruangan dengan banyak jadwalMatakuliah dengan foreign key 
    }
}
