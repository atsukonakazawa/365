<?php

namespace Database\Seeders;

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
        //１回目のシード
        $this->call(WordsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
