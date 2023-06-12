<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'name' => 'adminName',
                'nick_name' =>'管理者',
                'email' => 'mitsuru5110@gmail.com',
                'password' => bcrypt('password'),
                // 'password' =>Hash::make('password'),
                'is_admin' => '1',
            ]);
        
    }
}
