<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PizzaOrder extends Model
{
    protected $fillable = [
        'pizza_id', 'user_id','pizzaFlavor', 'pizzaNumber', 'pizzaSize', 'status', 'email','customerName','customerPhone','customerAddress'
    ];
}
