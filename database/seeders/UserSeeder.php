<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Wira',
            'email' => 'wira@toffeltechasia.com',
            'password' => Hash::make('password123'), // password default
        ]);  
    }
}
