<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
                [
                    'name'           => 'admin',
                    'email'          => 'admin@admin.com',
                    'password'       => bcrypt('123'),
                    'remember_token' => null,
                ]
            ];

        User::insert($users);

    }
}
