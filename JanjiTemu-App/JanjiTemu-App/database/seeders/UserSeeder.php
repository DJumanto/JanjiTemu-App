<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = file_get_contents(database_path("seeders/json/User.json"));
        $users = json_decode($json);

        foreach ($users as $user) {
            DB::table("users")->insert([
                "u_id" => $user->u_id,
                "u_email" => $user->u_email,
                "u_password" => $user->u_password,
                "u_roles_id" => $user->u_roles_id,
                "u_first_name" => $user->u_first_name,
                "u_last_name" => $user->u_last_name,
            ]);
        }
    }
}
