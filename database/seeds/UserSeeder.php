<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        factory(User::class)->create([
            'phone' => '13210086',
            'email' => 'zhoulv2012@hotmail.com',
            'username' => '2016191C36',
            'password' => bcrypt('2016191C36'),
        ]);
    }
}
