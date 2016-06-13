<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageDetail extends Model
{
     protected $table = 'imagedetail';
       public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
