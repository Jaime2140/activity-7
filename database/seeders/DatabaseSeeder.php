<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            RoboticsKitSeeder::class,
        ]);

        Course::factory(100)->create();
    }
}