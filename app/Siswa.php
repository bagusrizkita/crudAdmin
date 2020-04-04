<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'nilai_siswa';
    protected $fillable = ['nama', 'tahun', 'nilai'];
}
