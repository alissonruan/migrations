<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(LocationSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(BuildingSeeder::class);
        $this->call(AttractionSeeder::class);
        $this->call(PlanSeeder::class);
        $this->call(RoomSeeder::class);

    }
}
