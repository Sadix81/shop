<?php

namespace Database\Seeders\User;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'fullname' => 'sadra-zargari',
            'username' => 'sadra',
            'password' => password_hash('Sadr@111' , PASSWORD_DEFAULT),
            'mobile' => '09033440773',
            'email' => 'zsadra3@gmail.com',
        ]);
    }
}
