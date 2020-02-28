<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'phean',
            'email'=>'phean@gmail.com',
            'password'=>bcrypt('somrong'),
            'admin'=>'1',
        ]);
    }
}
