<?php

namespace Resto;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user()
    {
    	return $this->belongsTo('Resto\User');
    } 
}
