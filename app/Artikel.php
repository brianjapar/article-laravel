<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable=[
        'nama_penulis','judul_artikel','isi_artikel','file','user_id',
    ];

    //udah bikin relation bikin belong
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function comments(){
        return $this->morphMany(Comment::class,'commentable')->whereNull('parent_id');
        // return $this->belongsToMany(Comment::class,'commentable')->whereNull('parent_id');
    }

}
