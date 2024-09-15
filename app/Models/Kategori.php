<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

     protected $fillable = ['id','kategori'];
    public $timestamps = true;

    //relasi ke tabel wisata
    public function wisata()
    {
        return $this->hasMany(Wisata::class);
    }
}
