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
            'contents' => '{
                "members" : "4",
                "hometown" : "Los Angeles",
                "state" : "California"
            }'
        ]);

        DB::table('artists')->insert([
            'name' => 'Hot Water Music',
            'contents' => '{
                "members" : "4",
                "hometown" : "Gainsville",
                "state" : "Florida"
            }'
        ]);

        DB::table('artists')->insert([
            'name' => 'Green Day',
            'contents' => '{
                "members" : "3",
                "hometown" : "Berkeley",
                "state" : "California"
            }'
        ]);
    }
}
