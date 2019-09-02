<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class obituary extends Model
{
  protected $fillable = ['name', 'dod', 'dob', 'description', 'city', 'state', 'zip'];
  public function condolences()
 {
     return $this->hasMany('App\Condolence', 'obituaries_id')->orderBy('created_at','desc');
 }
}
