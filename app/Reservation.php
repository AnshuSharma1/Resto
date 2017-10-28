<?php

namespace Resto;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'name', 'email', 'place','phone','no_of_people','res_date','time_slot'
        ];
}
