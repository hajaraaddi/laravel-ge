<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as faker;

class AdminSeeder extends Seeder
{

        protected $faker;
    
        public function __construct()
        {
            $this->faker = faker::create();
        }



    public function run(): void
    {
        DB::table('users')->insert([


            'name' => 'admin',
            'email' => 'admin@email.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'), // password
            'remember_token' => Str::random(10),

        ]);
    }
}
