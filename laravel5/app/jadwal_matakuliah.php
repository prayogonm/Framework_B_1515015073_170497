<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal_matakuliah extends Model
{
	public function mahasiswa(){// fungsi dengan nama mahasiswa
    	return $this->belongsTo(Mahasiswa::class);//memberikan nilai return dari fungsi belongsTo yang merelasikan banyak jadwal_matakuliah dengan mahasiswa
   }
   public function ruangan(){// fungsi dengan nama ruangan
    	return $this->belongsTo(Ruangan::class);//memberikan nilai return dari fungsi belongsTo yang mrelasikan ruangan dengan banyak jadwal_matakuliah
   }
   public function Dosen_MataKuliah(){// fungsi dengan nama dosen_matakuliah
    	return $this->belongsTo(DosenMataKuliah::class);
      // memberikan nilai return dari fungsi belongsTo yang merelasikan dosen_matakuliah dengan banyak jadwal_Matakuliah
   }
    protected $table = 'Jadwal_matakuliah';
    protected $fillable = ['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];
}
