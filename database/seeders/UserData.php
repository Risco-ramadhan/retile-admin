<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => "Administrator",
                'username' => 'admin',
                'password' => bcrypt('admin'),
                'level' => 1,
                'email' => 'admin@gmail.com'
            ],
            [
                'name' => "Kasir",
                'username' => 'kasir',
                'password' => bcrypt('admin'),
                'level' => 2,
                'email' => 'kasir@gmail.com'
            ],
            [
                'name' => "Pimpinan",
                'username' => 'pimpinan',
                'password' => bcrypt('admin'),
                'level' => 3,
                'email' => 'pimpinan@gmail.com'
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
