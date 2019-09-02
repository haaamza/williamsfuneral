<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condolence extends Model
{
    protected $fillable = ['name', 'email', 'obituaries_id', 'condolence'];
  public function obituary()
  {
      return $this->belongsTo('App\obituary');
  }
}
