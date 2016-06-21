<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageLogo extends Model
{
	protected $table = 'imagelogo';
      public function logo()
    {
        return $this->belongsTo('App\Logo');
    }
}
