<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            DaySeeder::class,
            SubjectSeeder::class,
            ScheduleSeeder::class,
            StudentSeeder::class,
            PicketSeeder::class,
            UserSeeder::class,
            ArticleSeeder::class
        ]);
    }
}
