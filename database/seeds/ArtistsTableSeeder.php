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
            [
                'name' => 'ALL',
                'description' => 'ALL is a melodic punk band formed by members of the Descendents after the departure of their lead singer Milo Aukerman in 1987.'
            ],
            [
                'name' => 'Hot Water Music',
                'description' => 'Melodic punk / hardcore band. Releasing material on No Idea Records and more recently with Epitaph Records.'
            ],
            [
                'name' => 'Green Day',
                'description' => 'Green Day is a pop punk/alternative rock band from East Bay, California that formed in 1987.'
            ],
            [
                'name' => '24-7 Spyz',
                'description' => '24-7 Spyz were formed in South Bronx, New York in 1986 by vocalist P. Fluid, guitarist Jimi Hazel, bassist Rick Skatore and drummer Kindu Phibes. They were signed to In-Effect/Relativity Records in 1988.'
            ],
            [
                'name' => 'A Perfect Circle',
                'description' => 'American alternative rock/metal band founded in 1999 in Los Angeles.'
            ],
            [
                'name' => 'A Wilhelm Scream',
                'description' => 'Melodic hardcore punk band from New Bedford, Massachusetts, USA.'
            ],
            [
                'name' => 'A.F.I.',
                'description' => 'Short for "A Fire Inside". AFI is a hardcore / punk influenced rock band from California, originally formed in 1991 while the band members were still in high school.'
            ],
            [
                'name' => 'Aerosmith',
                'description' => 'American rock group.'
            ],
            [
                'name' => 'Against Me!',
                'description' => 'Punk rock band formed in 1997 in Gainesville, Florida, USA.'
            ],
            [
                'name' => 'Al Hirt',
                'description' => 'Trumpeter, born 7 November 1922 in New Orleans, Louisiana, died 27 April 1999 in New Orleans, Louisiana.'
            ],

        ]);
    }
}
