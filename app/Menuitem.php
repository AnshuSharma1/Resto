<?php

namespace Resto;

use Illuminate\Database\Eloquent\Model;

class Menuitem extends Model
{
    protected $fillable = [
        'name', 'price', 'category','is_veg','description'
    ];


}
