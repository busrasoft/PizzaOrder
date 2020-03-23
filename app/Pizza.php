<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $fillable = [
        'pizzaFlavor', 'pizzaNumber', 'pizzaSize',
    ];
}
