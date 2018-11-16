<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
  protected $table = "members";

  protected $fillable = ['bandId', 'memberName', 'photoUpload', 'bio', 'position'];
    //
   

  public function bands(){
      return $this->belongsTo('App\Band');
  }
}
