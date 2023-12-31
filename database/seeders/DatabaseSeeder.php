<?php

namespace Database\Seeders;

use Database\Seeders\Users;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create(); //ユーザーのテストデータ

        \App\Models\Item::factory(10)->create(); //料理のテストデータ
        
        $this->call([
            UserSeeder::class, // 呼び出すように追加
        ]);

    }

}
