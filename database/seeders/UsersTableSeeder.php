<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'nama_lengkap' => 'Luqman Fattah Nadin, S.Kom.',
                'username' => 'Administrator',
                'status' => 'User',
                'password' => Hash::make('1q2w3e4r5t'),
                'role' => 1,
                'image' => 'path/to/image.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lengkap' => 'Luqman Fattah Nadin, S.Kom.',
                'username' => 'nadhiens',
                'status' => 'User',
                'password' => Hash::make('nadhiens130720'),
                'role' => 2,
                'image' => 'path/to/image.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lain sesuai kebutuhan
        ];

        DB::table('users')->insert($users);
    }
}
