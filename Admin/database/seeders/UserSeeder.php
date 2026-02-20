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
        // Super Admin
        User::firstOrCreate(
            ['email' => 'superadmin@example.com'],
            [
                'name' => 'Super Admin',
                'password' => bcrypt('password'),
                'role' => 'super_admin',
            ]
        );

        // Admin
        User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin User',
                'password' => bcrypt('password'),
                'role' => 'admin',
            ]
        );

        // Specific Admin User - ranaimranali2210@gmail.com
        $adminUser = User::where('email', 'ranaimranali2210@gmail.com')->first();
        if ($adminUser) {
            // Update only role if user exists, don't overwrite password
            $adminUser->update([
                'name' => 'Admin Imran',
                'role' => 'admin',
            ]);
        } else {
            // Create new user if doesn't exist
            User::create([
                'name' => 'Admin Imran',
                'email' => 'ranaimranali2210@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'admin',
            ]);
        }

        // Regular User
        User::firstOrCreate(
            ['email' => 'user@example.com'],
            [
                'name' => 'Regular User',
                'password' => bcrypt('password'),
                'role' => 'user',
            ]
        );
    }
}
