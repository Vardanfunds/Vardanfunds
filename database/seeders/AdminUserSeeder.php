<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Check if admin user already exists
        $adminUser = User::where('email', 'admin@vardanfunds.com')->first();
        
        if (!$adminUser) {
            User::create([
                'name' => 'Admin User',
                'username' => 'admin',
                'email' => 'admin@vardanfunds.com',
                'password' => Hash::make('password'),
                'status' => 1,
            ]);
        }
    }
}