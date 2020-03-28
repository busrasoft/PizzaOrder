<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
// use App\User;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('en_GB');
        DB::table('users')->insert([
        [   'name' => 'Busra',
            'email' => 'busra@gmail.com',
            'address' => 'Istanbul/Turkey',
            'phone' => '0555 444 44 44',
            'admin_auth' => '1',
            'password' => '12345678',
        ],
        [   'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'address' => Str::random(10).' Istanbul/Turkey',
            'phone' => $faker->phoneNumber,
            'admin_auth' => rand(0, 1),
            'password' => Hash::make('password'),
        ],
        ]);

        $faker->unique(true);
    }
}
