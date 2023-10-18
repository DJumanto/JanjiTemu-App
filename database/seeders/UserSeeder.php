<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\App_User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'nama' => 'Ahmad Baihaqi',
                'email' => 'Ahmad.Baihaqi@nano.com',
                'password' => 'password123',
                'status' => 'admin',
            ],
            [
                'nama' => 'Jumanto Sonat',
                'email' => 'Jumanto.Sonat@email.com',
                'password' => 'secret456',
                'status' => 'member',
            ],
            // Add more user data as needed
        ];

        // Seed the data into the 'app_users' table
        foreach ($users as $user) {
            App_User::create($user);
        }
    }
}
