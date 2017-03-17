<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table = 'Mahasiswa';
    protected $fillable = ['nama','nim','alamat','pengguna_id'];
}
