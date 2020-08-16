<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Sattawat Chaikum";
        $user->email = "pingzza85@gmail.com";
        $user->password = bcrypt("1234");
        $user->save();
    }
}
