<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class defaultAdmin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create(
            [
                'username' => 'admin',
                'email' => 'admin@email.com',
                'password' => 'admin1234',
                'role' => 'admin',
            ]
            );
    }
}
