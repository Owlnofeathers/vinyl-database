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
            [
                'artist_id' => 1,
                'genre_id' => 16,
                'title' => 'Allroy’s Revenge',
                'enabled' => 1,
                'contents' => '{
                    "catalog-number" : "Cruz 006",
                    "vinyl-color" : "Black",
                    "pressing-info" : "",
                    "vinyl-size" : "12",
                    "photo-link" : "http://instagr.am/p/PIcRTogeTu/",
                    "condition" : "5"
                }'
            ],
            [
                'artist_id' => 1,
                'genre_id' => 16,
                'title' => 'Allroy Saves',
                'enabled' => 1,
                'contents' => '{
                    "catalog-number" : "Cruz 011",
                    "vinyl-color" : "Green",
                    "pressing-info" : "",
                    "vinyl-size" : "12",
                    "photo-link" : "http://instagram.com/p/bkc8A9AeUo/",
                    "condition" : "5"
                }'
            ],
            [
                'artist_id' => 2,
                'genre_id' => 16,
                'title' => 'Exister',
                'enabled' => 1,
                'contents' => '{
                    "catalog-number" : "Rise158-1",
                    "vinyl-color" : "Dookie/Electric Blue",
                    "pressing-info" : "First press, color limited to 2200",
                    "vinyl-size" : "12",
                    "photo-link" : "http://instagr.am/p/MHrs9CgeTO/",
                    "condition" : "5"
                }'
            ],
            [
                'artist_id' => 2,
                'genre_id' => 16,
                'title' => 'The New What Next',
                'enabled' => 1,
                'contents' => '{
                    "catalog-number" : "NIR 168",
                    "vinyl-color" : "Red",
                    "pressing-info" : "First Pressing, Gatefold, Limited to 500",
                    "vinyl-size" : "12",
                    "photo-link" : "http://instagr.am/p/MQktK5AeY0/",
                    "condition" : "5"
                }'
            ],
            [
                'artist_id' => 3,
                'genre_id' => 16,
                'title' => 'American Idiot',
                'enabled' => 1,
                'contents' => '{
                    "catalog-number" : "Reprise 48777-1",
                    "vinyl-color" : "Black",
                    "pressing-info" : "Gatefold, Double 180g Vinyl, Limited to 2000",
                    "vinyl-size" : "12",
                    "photo-link" : "http://instagr.am/p/N7FREWAefQ/",
                    "condition" : "5"
                }'
            ],
            [
                'artist_id' => 3,
                'genre_id' => 16,
                'title' => 'Kerplunk',
                'enabled' => 1,
                'contents' => '{
                    "catalog-number" : "LK 046",
                    "vinyl-color" : "Black",
                    "pressing-info" : "",
                    "vinyl-size" : "12",
                    "photo-link" : "http://instagram.com/p/amN6AKAeeU/",
                    "condition" : "5"
                }'
            ],
            [
                'artist_id' => 9,
                'genre_id' => 16,
                'title' => 'Thrash Unreal',
                'enabled' => 1,
                'contents' => '{
                    "catalog-number": "7-276028",
                    "pressing-info": "Limited to 6500",
                    "condition": 5,
                    "vinyl-size": "7",
                    "photo-link": "http://instagr.am/p/NU6IddAecy/"
                }'
            ],
            [
                'artist_id' => 9,
                'genre_id' => 16,
                'title' => 'Reinventing Axl Rose',
                'enabled' => 1,
                'contents' => '{
                    "catalog-number": "NIR 129",
                    "vinyl-color": "Mint Green",
                    "pressing-info": "Limited to 550",
                    "condition": 5,
                    "vinyl-size": "12",
                    "photo-link": "http://instagr.am/p/Po_DTbAeVU/"
                }'
            ],
            [
                'artist_id' => 9,
                'genre_id' => 16,
                'title' => 'New Wave',
                'enabled' => 1,
                'contents' => '{
                    "catalog-number": "Sire-101304-1",
                    "vinyl-color": "Clear Yellow",
                    "pressing-info": "First pressing of 6,000 on 180gm yellow",
                    "condition": 5,
                    "vinyl-size": "12",
                    "photo-link": "http://instagram.com/p/a2FtCnAeSs/"
                }'
            ],
            [
                'artist_id' => 9,
                'genre_id' => 16,
                'title' => 'Transgender Dysphoria Blues',
                'enabled' => 1,
                'contents' => '{
                    "catalog-number": "TTM003",
                    "vinyl-color": "Pink",
                    "pressing-info": "Gatefold, limited to 500 copies. Includes download code. This release was in support of national breast cancer awareness month. $1 for every unit shipped sponsored Gilda\'s Club NYC.",
                    "condition": 5,
                    "vinyl-size": "12",
                    "photo-link": "http://instagram.com/p/trKiI6AeWa/"
                }'
            ],
            [
                'artist_id' => 9,
                'genre_id' => 16,
                'title' => 'Searching For A Former Clarity',
                'enabled' => 1,
                'contents' => '{
                    "catalog-number": "FAT 684-1",
                    "vinyl-color": "White, Black",
                    "pressing-info": "A,B White C,D Black Gatefold Double Album, Limited to 3105",
                    "condition": 5,
                    "vinyl-size": "12",
                    "photo-link": "http://instagram.com/p/XgceBOAeZl/"
                }'
            ],
            [
                'artist_id' => 9,
                'genre_id' => 16,
                'title' => 'Americans Abroad! Live In London',
                'enabled' => 1,
                'contents' => '{
                    "catalog-number": "FAT 716-1",
                    "vinyl-color": "Black",
                    "pressing-info": "Double Vinyl, big poster",
                    "condition": 5,
                    "vinyl-size": "12",
                    "photo-link": "http://instagram.com/p/XgcR5nAeZS/"
                }'
            ],
            [
                'artist_id' => 4,
                'genre_id' => 13,
                'title' => 'Gumbo Millennium',
                'enabled' => 1,
                'contents' => '{
                    "catalog-number": "In-Effect 88561-3014-1",
                    "vinyl-color": "Black",
                    "pressing-info": "",
                    "condition": 4,
                    "vinyl-size": "12",
                    "photo-link": "http://instagr.am/p/OMtDM6geWr/"
                }'
            ],
            [
                'artist_id' => 5,
                'genre_id' => 1,
                'title' => 'Emotive',
                'enabled' => 1,
                'contents' => '{
                    "catalog-number": "Virgin 7243 8 66687 1 4",
                    "vinyl-color": "Clear Orange",
                    "pressing-info": "Triple Gatefold, Double Vinyl",
                    "condition": 5,
                    "vinyl-size": "12",
                    "photo-link": "https://instagram.com/p/34wDWygeYJ/"
                }'
            ],
            [
                'artist_id' => 6,
                'genre_id' => 17,
                'title' => 'Answer That and Stay Fashionable',
                'enabled' => 1,
                'contents' => '{
                    "catalog-number": "WR1370",
                    "vinyl-color": "black",
                    "pressing-info": "Original pressing",
                    "condition": 4,
                    "vinyl-size": "12",
                    "photo-link": "http://instagram.com/p/a4NiZrAeQj/"
                }'
            ],
            [
                'artist_id' => 7,
                'genre_id' => 17,
                'title' => 'Partycrasher',
                'enabled' => 1,
                'contents' => '{
                    "catalog-number": "NIR 330",
                    "vinyl-color": "Clear with Blue and White Splatter",
                    "pressing-info": "Limited to 600 copies.",
                    "condition": 5,
                    "vinyl-size": "12",
                    "photo-link": "http://instagram.com/p/kX0CvqAeZM/"
                }'
            ],
            [
                'artist_id' => 6,
                'genre_id' => 17,
                'title' => 'Sing The Sorrow',
                'enabled' => 1,
                'contents' => '{
                    "catalog-number": "AR 026",
                    "vinyl-color": "Red",
                    "pressing-info": "First Pressing, Gatefold Double Vinyl",
                    "condition": 5,
                    "vinyl-size": "12",
                    "photo-link": "https://instagram.com/p/z8nsY5Aecd/"
                }'
            ],
            [
                'artist_id' => 8,
                'genre_id' => 1,
                'title' => 'Rocks',
                'enabled' => 1,
                'contents' => '{
                    "catalog-number": "PC 34165 ",
                    "vinyl-color": "",
                    "pressing-info": "",
                    "condition": 3,
                    "vinyl-size": "12",
                    "photo-link": "http://instagr.am/p/PTRFxBAebR/"
                }'
            ],
            [
                'artist_id' => 10,
                'genre_id' => 11,
                'title' => 'Honey In The Horn',
                'enabled' => 1,
                'contents' => '{
                    "catalog-number": "LPM-2733",
                    "vinyl-color": "",
                    "pressing-info": "",
                    "condition": 2,
                    "vinyl-size": "12",
                    "photo-link": "http://instagram.com/p/b4n9QtAeYr/"
                }'
            ],
            [
                'artist_id' => 10,
                'genre_id' => 11,
                'title' => 'Sugar Lips',
                'enabled' => 1,
                'contents' => '{
                    "catalog-number": "",
                    "condition": 2,
                    "vinyl-color": "",
                    "pressing-info": "",
                    "vinyl-size": "12",
                    "photo-link": "http://instagram.com/p/b7okSQAeV8/"
                }'
            ],

        ]);
    }
}
