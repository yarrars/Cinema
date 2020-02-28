<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $fillable=['pelangganID', 'kode_kursi', 'jadwalID', 'judul', 'studio', 'tanggal', 'jam'];
    protected $primaryKey='pelangganID';
}
