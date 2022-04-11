<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
          'name'=>'Admin',
          'email'=>'admin@gmail.com',
          'address'=>'adminaddress',
          'telephone'=>'437823012',
          // 'usertype'=>'admin'/,
          'password'=>Hash::make('adminpassword'),
        ]);
    }
}
