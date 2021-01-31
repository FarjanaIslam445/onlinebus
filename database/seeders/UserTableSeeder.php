<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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

        'name'   =>  'Iccha',
        'username'=>  'farjana islam',
        'email'   =>  'iccha@gmail.com',
        'password'=>  bcrypt('123'),
         'role'    =>  'admin',
         'phone'   =>   '0111'

       ]);
    }
}
