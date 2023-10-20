<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }

    public function penduduk(){
        return $this->hasMany(Penduduk::class);
    }
}