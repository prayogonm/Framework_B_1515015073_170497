<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matkul extends Model
{
    protected $table = 'matkul';// mendeklarasikan tabel matkul
    // protected $fillable=['title','keterangan'];

    public function dosenmatkul(){// fungsi dengan nama dosen_matakuliah
    	return $this->hasMany(dosenmatkul::class);// memberikan nillai return dari fungsi hasMany yang merelasikan matakuliah dengan banyak dosenmatkul dengan foreign key matakuliah_id
    }
}
