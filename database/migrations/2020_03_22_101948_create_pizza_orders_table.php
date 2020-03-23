<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePizzaOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizza_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pizza_id')->constrain()->nullable();
            $table->foreignId('user_id')->constrain()->nullable();
            $table->string('flavorPizza')->nullable();
            $table->integer('numberPizza')->nullable();
            $table->integer('sizePizza')->nullable();
            $table->string('status')->nullable();
            $table->string('email')->nullable();
            $table->string('customerName')->nullable();
            $table->string('customerPhone')->nullable();
            $table->string('customerAddress')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pizzaOrders');
    }
}
