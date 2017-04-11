<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jarvis extends Model
{
    protected $table = 'pengguna';
    protected $fillable = ['username','password'];
}
