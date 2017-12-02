<?php

namespace Resto;

use Illuminate\Database\Eloquent\Model;

class Shoppingcart extends Model
{
    protected $fillable = [
        'name', 'qty', 'price'
        ];
}
