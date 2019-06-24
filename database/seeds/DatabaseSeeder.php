<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $path = 'initial/pages.sql';

        \Illuminate\Support\Facades\DB::unprepared(file_get_contents($path));

    }
}
