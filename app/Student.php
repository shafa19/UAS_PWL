<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = ['nama_siswa', 'jk', 'usia', 'alamat', 'email', 'no_telp'];
    
}
