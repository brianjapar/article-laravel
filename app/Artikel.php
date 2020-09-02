<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable=[
        'nama_penulis','judul_artikel','isi_artikel','file'
    ];
}
