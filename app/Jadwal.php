<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $fillable=['jadwalID', 'judul', 'studio', 'tanggal', 'jam'];
    protected $primaryKey='jadwalID';
}
