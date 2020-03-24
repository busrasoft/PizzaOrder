<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PizzaOrder extends Model
{
    protected $fillable = [
        'pizza_id', 'user_id', 'number_of_pizza', 'pizza_size', 'status',
    ];
}
