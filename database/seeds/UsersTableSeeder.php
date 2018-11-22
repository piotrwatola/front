<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'login' => 'admin',
            'password' => '$2y$10$VC1Nhb1iXCj75S8oXrRyEO2M2D9NxR6KSUw.ujqfgnwoaO02fFE0O',
            'firstname' => 'Admin',
            'lastname' => 'Root',
            'ghost' => false
        ]);
    }
}
