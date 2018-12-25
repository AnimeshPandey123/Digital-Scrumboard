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
         DB::table('projects')->insert([
            'name' => str_random(10),
            'description' => str_random(50),
            'user_id' => 1,
        ]);
    }
}
