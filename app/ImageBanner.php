<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageBanner extends Model
{
     protected $table = 'imagebanner';
       public function banner()
    {
        return $this->belongsTo('App\Banner');
    }
}
