<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    protected $fillable = ['studioID','studio','fasilitas','tarif'];
    protected $primaryKey='studioID';
}
