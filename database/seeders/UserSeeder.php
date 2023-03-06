<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'      => 'Rahmat Hidayatullah',
                'email'     => 'admin@gmail.com',
                'password'  => Hash::make('password'),
                'role'      => 'admin',
            ],
            [
                'name'      => 'Pusat Studi',
                'email'     => 'adminpusatstudi@gmail.com',
                'password'  => Hash::make('password'),
                'role'      => 'admin',
            ],
            [
                'name'      => 'User Pusat Studi',
                'email'     => 'userpusatstudi@gmail.com',
                'password'  => Hash::make('password'),
                'role'      => 'user',
            ],
        ]);
    }
}
