<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'role_name' => 'admin',
                'role_description' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_name' => 'user',
                'role_description' => 'User',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'role_name' => 'author',
                'role_description' => 'Author',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('roles')->insert($roles);
    }
}