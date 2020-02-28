<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable=['filmID', 'judul', 'genre', 'durasi', 'sinopsis', 'image'];
    protected $primaryKey='filmID';
}
