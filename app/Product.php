<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
      public function imageDetail()
    {
        return $this->hasMany('App\ImageDetail');
    }
}
