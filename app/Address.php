<?php

namespace Resto;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable=['addressline','city','state','zip','phone','country'];
}
