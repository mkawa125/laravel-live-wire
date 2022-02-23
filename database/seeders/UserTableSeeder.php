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
        $user = User::create([
            "name" => "Dahabu Saidi",
            "email" => "dahabusaidi@gmail.com",
            "password" => bcrypt("123456"),
        ]);
    }
}
