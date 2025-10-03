<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Array como nome dos users
        $users = [
            [ 'name' => 'Léo Sobral', 'email' => 'leo@mail', 'pass' => Hash::make('YG8MsY2qE+?5') ],
        ];

        // Inserindo nome por nome na tabela
        foreach ($users as $user) {
            DB::table('users')->insert([
                'name'       => $user['name'],
                'email'      => $user['email'],
                'password'   => $user['pass'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
