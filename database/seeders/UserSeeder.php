<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserSeeder extends Seeder
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
                'name' => 'Deneme',
                'email' => 'deneme@deneme.com',
                'password' => Hash::make('12345678')
            ],
            [
                'name' => 'berkan',
                'email' => 'berkan@berkan.com',
                'password' => Hash::make('12345678')
            ],
                      
        ];

        foreach ($users as $user) {
            User::insert($user);
        }
    }
}