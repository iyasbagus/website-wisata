<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

     protected $fillable = ['id','tema_event','tgl_diselenggarakan','id_lokasi'];
    public $timestamps = true;

    //relasi ke tabel wisata
    public function wisata()
    {
        return $this->hasMany(Wisata::class);
    }
    //relasi ke tabel lokasi
    public function lokasi()
    {
        return $this->BelongsTo(Lokasi::class, 'id_lokasi');
    }
}
