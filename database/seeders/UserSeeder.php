<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
                'name' => '管理者',
                'nick_name' =>'アドミンユーザー',
                'email' => 'mitsuru@gmail.com',
                // 'password' => bcrypt('password'),
                'password' =>Hash::make('password'),
                'is_admin' => '1',
            ]);
        
    }
}
