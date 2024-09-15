<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_lokasi','provinsi','kabupaten'];
    public $timestamps = true;

    //relasi ke tabel wisata
    public function wisata()
    {
        return $this->hasMany(Wisata::class);
    }
     //relasi ke tabel event
     public function event()
    {
        return $this->hasMany(Event::class);
    }
}
