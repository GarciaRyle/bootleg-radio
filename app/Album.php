<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = "albums";
    protected $fillable = ['bandId', 'albumName', 'albumType','albumPhoto'];

    public function bands(){
        return $this->belongsTo('App\Band');  
}
