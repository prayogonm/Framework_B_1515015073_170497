<?php 
namespace App;
use Illuminate\Database\Eloquent\Model;
class Hobi extends Model  
{ 
protected $table = 'hobi'; 
protected $fillable = ['hobi', 'anggota_id']; 
 
  /* Relasi One-to-Many 
  * ================= 
  * Buat function bernama anggota(), dimana model 'hobi' memiliki  
  * relasi One-to-Many (belongsTo) sebagai penerima 'anggota_id' 
  */ 
 public function anggota() 
 { 
 return $this->belongsTo('App\Anggota'); 
 } 
}  
?> 