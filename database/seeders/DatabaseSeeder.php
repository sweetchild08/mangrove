<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'username'=>'admin',
            'email'=>'admin@test.com',
            'usertype'=>'admin',
            'password' => Hash::make('admin'),
        ]);
    }
}
