<?php

namespace Database\Seeders\User;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::firstOrCreate(['name' => 'sysadmin']);

        // Create the user
        $user = User::create([
            'fullname' => 'sadra-zargari',
            'username' => 'sadra',
            'password' => bcrypt('Sadr@111'), // Use bcrypt for password hashing
            'mobile' => '09033440773',
            'email' => 'zsadra3@gmail.com',
        ]);

        $user->assignRole($role);
    }
}
