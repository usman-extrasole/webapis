<?php

use Illuminate\Database\Seeder;

class UsersRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' => '1',
            'phone' => '63534282829',
            'country' => 'Pakistan',
            'img'=>'dist/img/avatar.png',
            'password' => Hash::make('12345678'),
        ]);

        \App\User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'role' => '3',
            'phone' => '63534282829',
            'img'=>'dist/img/avatar.png',
            'country' => 'Pakistan',
            'password' => Hash::make('12345678'),
        ]);
    }
}
