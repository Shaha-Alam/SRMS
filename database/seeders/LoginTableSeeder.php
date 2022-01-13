<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Seeder;


class LoginTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
        'name'=>'shaha-alam',
        'email'=>'admin@gmail.com',
        'password'=>bcrypt('17203002'),
        'role'=>'admin'
        ]);
       
    }
}
