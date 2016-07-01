<?php

use Illuminate\Database\Seeder;

class LabelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('labels')->insert([
            [
                'name' => 'Fat Wreck Chords',
                'description' => 'Label owned by Fat Mike, singer of the punk band NOFX & Erin Burkett.'
            ],
            [
                'name' => 'Relapse Records',
                'description' => 'American metal and experimental label. Titles range from death metal, sludge, and black metal to post-rock and synthwave.'
            ],
            [
                'name' => 'Gold Standard Laboratories',
                'description' => 'Gold Standard Laboratories or GSL was an independent record label which was founded in 1993 in Boulder, Colorado by Sonny Kay.'
            ],
            [
                'name' => 'Interscope Records',
                'description' => 'Interscope Records was founded by film producer Ted Field and record producer Jimmy Iovine in 1989 as a small alternative label.'
            ],
            [
                'name' => 'Mondo',
                'description' => 'Mondo creates limited edition screen printed posters for our favorite classic and contemporary films, in addition to vinyl movie soundtracks, VHS re-issues, and apparel.'
            ],
            [
                'name' => 'SST Records',
                'description' => 'SST Records is a record label formed in 1978 in Long Beach, California by Greg Ginn.'
            ],
            [
                'name' => 'Rise Records',
                'description' => 'American hardcore/emo label based in Portland, OR, USA. Founded 1991 by Craig Ericson.'
            ],
            [
                'name' => 'No Idea Records',
                'description' => 'Long standing independent punk rock label based in Gainesville, Florida - USA, run by Var Thelin.'
            ],
            [
                'name' => 'Reprise Records',
                'description' => 'Reprise Records was formed in late 1959 by Frank Sinatra in order to allow more \'artistic freedom\' for his own recordings. Fellow "Rat Pack" members Dean Martin and Sammy Davis Jr. also moved to the label.'
            ],
            [
                'name' => 'Lookout Records',
                'description' => 'Independent punk rock label based in Berkeley, California, USA.'
            ],[
                'name' => 'Sire',
                'description' => 'American record label founded by Seymour Stein and Richard Gottehrer in 1966. The label was acquired by Warner Music Group in 1980.'
            ],
            [
                'name' => 'Virgin Records',
                'description' => 'Started by Richard Branson in the early 1970s as an independent label based in London, UK. Sold to EMI Group in 1991, Virgin is now a part of Universal Music Group (since September 2012).'
            ],
            [
                'name' => 'Wingnut Records',
                'description' => ''
            ],
            [
                'name' => 'Adeline Records',
                'description' => 'Punk rock label from Oakland, California founded in late 1997 by four friends: Adrienne Armstrong, Billie Joe Armstrong (Green Day), Lynn Thiebaud, and Jim Thiebaud (Real Skateboards).'
            ],
            [
                'name' => 'RCA Victor',
                'description' => 'The RCA Victor label was introduced in 1946 as, at that time, a replacement for the Victor and Bluebird (3) brands. Until then, the Recording Corporation of America had used the Victor brand it acquired through the Victor Talking Machine Co. takeover in 1929.'
            ],
            [
                'name' => 'In-Effect',
                'description' => 'In-Effect was a short-lived imprint of Relativity, mostly used for punk and metal acts from the East Coast of the United States.'
            ],
            [
                'name' => 'Total Treble',
                'description' => 'Label started by Against Me!'
            ],

        ]);
    }
}
