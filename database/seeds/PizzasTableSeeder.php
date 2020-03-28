<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
// use App\User;
use Faker\Factory as Faker;


class PizzasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = array(
            ['New York Pizza', 'Pizza Sauce, Mozarella Cheese','Big Pizza'],
            ['Chicago Pizza', 'Red Roasted Pepper, Thyme','Small Pizza'],
            ['Margharita  Pizza', 'Black Olive,Black Olive','Medium Pizza'],
            ['Pepperoni Pizza', 'White Cheese, Cube Tomato','Medium Pizza'],
            ['Vejeterra Pizza', 'Mushroom, Baked Eggplant,','Small Pizza'],
        );
        foreach ($arr as list($pizza_name, $pizza_flavor, $pizza_size)) {
            DB::table('pizzas')->insert([
                'pizza_name' => $pizza_name,
                'pizza_flavor' => $pizza_flavor,
                'pizza_size' => $pizza_size,    
            ]);
        }
    }
}
