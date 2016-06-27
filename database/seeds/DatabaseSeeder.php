<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ArtistsTableSeeder::class);
        $this->call(RecordsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(GenresTableSeeder::class);
    }
}
