<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\User;
use App\Models\Task;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PrioritySeeder::class,
        ]);
        Job::factory(10)->create();
        Task::factory(10)->create();
    }
}
