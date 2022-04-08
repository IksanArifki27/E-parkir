<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
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
        User::truncate();
        User::create([
            'name'=>"iksan arifki",
            'level'=>'admin',
            'email'=>'admin123',
            'password'=>bcrypt('admin123'),
            'remember_token'=>Str::radom(60),

        ]);
    }
}
