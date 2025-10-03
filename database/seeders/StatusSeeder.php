<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $status = [
            'Lançamento',
            'Em obras',
            'Pronto para morar',
        ];

        foreach ($status as $stat) {
            DB::table('status')->insert([
                'name' => $stat,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
