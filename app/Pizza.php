<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $fillable = [
        'pizza_flavor', 'pizza_name', 'pizza_size',
    ];
}
