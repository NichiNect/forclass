<?php

namespace Database\Seeders;

use App\Models\{User , Student};
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            ['role' => 'admin', 'username' => 'yoniwidhi', 'name' => 'Yoni Widhi C', 'email' => 'yoniwidhi@email.com', 'password' => \Hash::make('thispassword'), 'is_active' => '1', 'created_at' => date('Y-m-d H:i:s', time())],
            ['role' => 'admin', 'username' => 'admin2', 'name' => 'Admin 1', 'email' => 'admin@email.com', 'password' => \Hash::make('thispassword'), 'is_active' => '1', 'created_at' => date('Y-m-d H:i:s', time())],
        ]);

        $students = Student::get();
        $insertDb = [];

        foreach ($students as $student) {
            $insertDb[] = [
                'role' => 'student',
                'username' => explode(' ', $student->name)[0],
                'name' => $student->name,
                'email' => explode(' ', $student->name)[0] . '@email.com',
                'password' => \Hash::make('thispassword'),
                'is_active' => '0',
                'created_at' => date('Y-m-d H:i:s', time())
            ];
        }

        User::insert($insertDb);
    }
}
