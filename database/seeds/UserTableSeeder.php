<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'name' => 'Cesar',
            'email' => 'triohost@gmail.com',
            'password' => bcrypt('123456')
        ]);

        User::create([

            'name' => 'Eduardo',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456789')
        ]);
    }
}
