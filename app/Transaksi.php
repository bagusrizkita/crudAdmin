<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table='transaksi';
    protected $fillabel = ['id_karyawan', 'id_spv', 'lamalembur', 'upahlembur'];
}
