<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            
            [
                'name' => 'Classic Rock'
            ],
            [
                'name' => 'Doom Metal'
            ],
            [
                'name' => 'Stoner Rock'
            ],
            [
                'name' => 'Punk Rock'
            ],
            [
                'name' => 'Thrash Metal'
            ],
            [
                'name' => 'Grind Core'
            ],
            [
                'name' => 'Classical'
            ],
            [
                'name' => 'Electronic'
            ],
            [
                'name' => 'Soundtrack'
            ],
            [
                'name' => 'Compilation'
            ],
            [
                'name' => 'Jazz'
            ],
            [
                'name' => 'Noise'
            ],
            [
                'name' => 'Progressive Rock'
            ],
            [
                'name' => 'Country'
            ],
            [
                'name' => 'Pop'
            ],
            [
                'name' => 'Pop Punk'
            ],
            [
                'name' => 'Emo'
            ],

        ]);
    }
}
