<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            [
            'name' => 'Admin',
            'email' => 'admin@pecece.com',
            'role' => 'admin',
            'status' => 'active',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'),
            'created_at' => now(),
            'updated_at' => now()
            ],
            [

            'name' => 'Sample Author',
            'email' => 'author1@pecece.com',
            'role' => 'author',
            'status' => 'active',
            'email_verified_at' => now(),
            'password' => Hash::make('author'),
            'created_at' => now(),
            'updated_at' => now()

            ],

        ],
        
    );
    }
}
