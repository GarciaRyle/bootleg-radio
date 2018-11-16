<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    protected $fillable = ['bandName', 'userId', 'genre', 'bandDescription', 'fileUpload'];

    
    public function member(){
        return $this->belongsTo('App\Member');
    }
  }