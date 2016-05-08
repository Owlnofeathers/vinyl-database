<?php

use Illuminate\Database\Seeder;

class RecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('records')->insert([
            'artist_id' => 1,
            'title' => 'Allroy’s Revenge',
            'contents' => '{
                "catalog-number" : "Cruz 006",
                "vinyl-color" : "Black",
                "pressing-info" : "N/A",
                "vinyl-size" : "12",
                "genre" : "Punk",
                "photo-link" : "http://instagr.am/p/PIcRTogeTu/",
                "condition" : "5"
            }'
        ]);

        DB::table('records')->insert([
            'artist_id' => 1,
            'title' => 'Allroy Saves',
            'contents' => '{
                "catalog-number" : "Cruz 011",
                "vinyl-color" : "Green",
                "pressing-info" : "N/A",
                "vinyl-size" : "12",
                "genre" : "Punk",
                "photo-link" : "http://instagram.com/p/bkc8A9AeUo/",
                "condition" : "5"
            }'
        ]);

        DB::table('records')->insert([
            'artist_id' => 2,
            'title' => 'Exister',
            'contents' => '{
                "catalog-number" : "Rise158-1",
                "vinyl-color" : "Dookie/Electric Blue",
                "pressing-info" : "First press, color limited to 2200",
                "vinyl-size" : "12",
                "genre" : "Punk",
                "photo-link" : "http://instagr.am/p/MHrs9CgeTO/",
                "condition" : "5"
            }'
        ]);

        DB::table('records')->insert([
            'artist_id' => 2,
            'title' => 'The New What Next',
            'contents' => '{
                "catalog-number" : "NIR 168",
                "vinyl-color" : "Red",
                "pressing-info" : "First Pressing, Gatefold, Limited to 500",
                "vinyl-size" : "12",
                "genre" : "Punk",
                "photo-link" : "http://instagr.am/p/MQktK5AeY0/",
                "condition" : "5"
            }'
        ]);

        DB::table('records')->insert([
            'artist_id' => 3,
            'title' => 'American Idiot',
            'contents' => '{
                "catalog-number" : "Reprise 48777-1",
                "vinyl-color" : "Black",
                "pressing-info" : "Gatefold, Double 180g Vinyl, Limited to 2000",
                "vinyl-size" : "12",
                "genre" : "Punk",
                "photo-link" : "http://instagr.am/p/N7FREWAefQ/",
                "condition" : "5"
            }'
        ]);

        DB::table('records')->insert([
            'artist_id' => 3,
            'title' => 'Kerplunk',
            'contents' => '{
                "catalog-number" : "LK 046",
                "vinyl-color" : "Black",
                "pressing-info" : "N/A",
                "vinyl-size" : "12",
                "genre" : "Punk",
                "photo-link" : "http://instagram.com/p/amN6AKAeeU/",
                "condition" : "5"
            }'
        ]);
    }
}
