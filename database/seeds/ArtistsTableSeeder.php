<?php

use Illuminate\Database\Seeder;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artists')->insert([
            'name' => 'ALL',
            'description' => 'ALL is a melodic punk band formed by members of the Descendents after the departure of their lead singer Milo Aukerman in 1987.'
        ]);

        DB::table('artists')->insert([
            'name' => 'Hot Water Music',
            'description' => 'Melodic punk / hardcore band. Releasing material on No Idea Records and more recently with Epitaph Records. '
        ]);

        DB::table('artists')->insert([
            'name' => 'Green Day',
            'description' => 'Green Day is a pop punk/alternative rock band from East Bay, California that formed in 1987.'
        ]);
    }
}
