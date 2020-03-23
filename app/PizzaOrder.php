<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PizzaOrder extends Model
{
    protected $fillable = [
        'pizza_id', 'user_id','flavorPizza', 'numberPizza', 'sizePizza', 'status', 'email','customerName','customerPhone','customerAddress'
    ];
}
