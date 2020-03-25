<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PizzaOrder extends Model
{
    protected $fillable = [
        'pizza_id', 'user_id', 'number_of_pizza', 'pizza_size', 'status',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function pizza(){
        return $this->belongsTo(Pizza::class);
    }
}
