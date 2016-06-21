<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    protected $table = 'logo';
      public function imageLogo()
    {
        return $this->hasMany('App\ImageLogo');
    }
}
