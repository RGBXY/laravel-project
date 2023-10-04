<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; 

class UserSeeder extends Seeder 
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'admin',
            'email'=>'derrenamadeo@gmail.com',
            'password'=>bcrypt('hahahi')
        ]);

        User::create([
            'name'=>'staff',
            'email'=>'staff@gmail.com',
            'password'=>bcrypt('hahahu')
        ]);
    }
}
