<?php

namespace Database\Seeders;

use App\Models\User;
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
    }
}
