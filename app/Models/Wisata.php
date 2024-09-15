<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_wisata','id_kategori','id_lokasi','deskripsi','cover','id_event'];
    public $timestamps = true;

     //relasi ke tabel kategori
    public function kategori()
    {
        return $this->BelongsTo(Kategori::class, 'id_kategori');
    }
    //relasi ke tabel lokasi
    public function lokasi()
    {
        return $this->BelongsTo(Lokasi::class, 'id_lokasi');
    }
    //relasi ke tabel event
    public function event()
    {
        return $this->BelongsTo(Event::class, 'id_event');
    }

    //menghapus image
    public function deleteImage(){
        if($this->cover && file_exists(public_path('image/wisata' . $this->cover))){
            return unlink(public_path('image/wisata' . $this->cover));
        }
    }
}
