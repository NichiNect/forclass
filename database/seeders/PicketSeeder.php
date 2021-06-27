<?php

namespace Database\Seeders;

use App\Models\Picket;
use Illuminate\Database\Seeder;

class PicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Picket::insert([
            ['student_id'=> 1, 'day_id' => 1],
            ['student_id'=> 2, 'day_id' => 1],
            ['student_id'=> 3, 'day_id' => 1],
            ['student_id'=> 4, 'day_id' => 1],
            ['student_id'=> 5, 'day_id' => 1],
            ['student_id'=> 6, 'day_id' => 1],
            ['student_id'=> 7, 'day_id' => 1],
            
            ['student_id'=> 8, 'day_id' => 2],
            ['student_id'=> 9, 'day_id' => 2],
            ['student_id'=> 10, 'day_id' => 2],
            ['student_id'=> 11, 'day_id' => 2],
            ['student_id'=> 12, 'day_id' => 2],
            ['student_id'=> 13, 'day_id' => 2],
            ['student_id'=> 14, 'day_id' => 2],
            
            ['student_id'=> 15, 'day_id' => 3],
            ['student_id'=> 16, 'day_id' => 3],
            ['student_id'=> 17, 'day_id' => 3],
            ['student_id'=> 18, 'day_id' => 3],
            ['student_id'=> 19, 'day_id' => 3],
            ['student_id'=> 20, 'day_id' => 3],
            ['student_id'=> 21, 'day_id' => 3],

            ['student_id'=> 1, 'day_id' => 4],
            ['student_id'=> 2, 'day_id' => 4],
            ['student_id'=> 3, 'day_id' => 4],
            ['student_id'=> 4, 'day_id' => 4],
            ['student_id'=> 5, 'day_id' => 4],
            ['student_id'=> 6, 'day_id' => 4],
            ['student_id'=> 7, 'day_id' => 4],

            ['student_id'=> 8, 'day_id' => 5],
            ['student_id'=> 9, 'day_id' => 5],
            ['student_id'=> 10, 'day_id' => 5],
            ['student_id'=> 11, 'day_id' => 5],
            ['student_id'=> 12, 'day_id' => 5],
            ['student_id'=> 13, 'day_id' => 5],
            ['student_id'=> 14, 'day_id' => 5],

            ['student_id'=> 15, 'day_id' => 6],
            ['student_id'=> 16, 'day_id' => 6],
            ['student_id'=> 17, 'day_id' => 6],
            ['student_id'=> 18, 'day_id' => 6],
            ['student_id'=> 19, 'day_id' => 6],
            ['student_id'=> 20, 'day_id' => 6],
            ['student_id'=> 21, 'day_id' => 6],
        ]);
    }
}
