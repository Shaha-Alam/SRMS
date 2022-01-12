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
        'name'=>'mehadi',
        'email'=>'me@gmail.com',
        'password'=>bcrypt('12345'),
        'role'=>'admin'
        ]);
       
    }
}
