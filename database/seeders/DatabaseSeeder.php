<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\CategoriesTableSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\AdminsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
