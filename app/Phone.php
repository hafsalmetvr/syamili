<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    //
    public function User()
    {
    	return $this->belongsTo('App\User','foreign_key')->withDefault([
        'name' => 'Guest Author',
    ]);
    }
}
