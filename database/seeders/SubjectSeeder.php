<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::create([
            'name' => 'Matematika'
        ]);

        Subject::create([
            'name' => 'Bahasa Indonesia'
        ]);

        Subject::create([
            'name' => 'Bahasa Inggris'
        ]);

        Subject::create([
            'name' => 'Bahasa Jawa'
        ]);

        Subject::create([
            'name' => 'Bahasa Jepang'
        ]);

        Subject::create([
            'name' => 'Teknik Fisika'
        ]);

        Subject::create([
            'name' => 'PKN'
        ]);

        Subject::create([
            'name' => 'Pendidikan Agama'
        ]);

        Subject::create([
            'name' => 'Pemrograman Web'
        ]);

        Subject::create([
            'name' => 'Pemrograman Mobile/Android'
        ]);

        Subject::create([
            'name' => 'Database SQL'
        ]);

        Subject::create([
            'name' => 'Ethical System Security'
        ]);
    }
}
