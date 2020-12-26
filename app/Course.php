<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    protected $fillable = ['nama_course', 'short_desc', 'long_desc', 'harga'];
}
