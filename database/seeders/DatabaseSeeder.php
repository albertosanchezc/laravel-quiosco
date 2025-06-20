<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        /**
        * Seed the applicatio's database
        *
        * @return vood
        */
        $this->call(CategoriaSeeder::class);
        $this->call(ProductoSeeder::class);

    }
}
