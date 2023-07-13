<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Rizky Ibrahim',
            'username' => 'rizky98ibrahim',
            'email' => 'rizky98ibrahim@gmail.com',
            'phone' => '087808740020',
            'address' => 'Jl. Primadana VII Blok C8 No.28 RT.06/RW.10, Jatisari, Jatiasih, Kota Bekasi 17426',
            'avatar' => 'https://avatars.githubusercontent.com/u/56132740?v=4',
            'birth_place' => 'Jakarta',
            'birth_date' => '1998-06-06',
            'religion' => 'islam',
            'gender' => 'laki-laki',
            'password' => bcrypt('password'),
            'status' => 'active',
            'role_id' => 1,
            'email_verified_at' => now(),
        ]);
        User::factory()->count(20)->create();

    }
}