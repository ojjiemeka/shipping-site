<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            // 'is_admin' => true,
            'password' => Hash::make('ad1min23'),
        ],
        [
            'name' => 'user',
            'email' => 'user@user.com',
            // 'is_admin' => false,
            'password' => Hash::make('ad1min23'),
        ]);

        // Add more data if needed...

        // You can use the factory method for multiple entries:
        // \App\Models\User::factory(10)->create()B4
 
    }
}
