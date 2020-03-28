<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
// use App\User;
use Faker\Factory as Faker;
use App\Pizza;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\User;

class PizzaOrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //     factory(App\Pizza::class, 5)->create()->each(function ($pizzas) {
    //         // Seed the relation with one address
    //         $pizza_id = factory(App\PizzaOrder::class)->make();
    //         $pizzas->id()->save($pizza_id);

    //         // Seed the relation with 5 purchases
    //         $users = factory(App\User::class, 5)->make();
    //         $pizzas->id()->saveMany($users);
    //     });




        DB::table('pizza_orders')->insert([
            'pizza_id' => Pizza::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'number_of_pizza' => '1',
            'pizza_size' => '1',
            'status' => '1',
    
        ]);
    }
}
