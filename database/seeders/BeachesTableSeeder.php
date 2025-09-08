<?php

use Illuminate\Database\Seeder;
use App\Models\Beach;

class BeachesTableSeeder extends Seeder
{
    public function run()
    {
        $beaches = [
            'Agonda', 'Anjuna', 'Arambol', 'Baga', 'Calangute', 'Candolim',
            'Chapora', 'Colva', 'Cavelossim', 'Dona Paula', 'Miramar',
            'Morjim', 'Palolem', 'Sinquerim', 'Vagator', 'Varca', 'Majorda',
            'Betalbatim', 'Ashwem', 'Bambolim', 'Querim', 'Bogmalo',
            'Mandrem', 'Ozran', 'Hollant', 'Keri', 'Patnem', 'Utorda',
            'Galjibag', 'Talpona'
        ];

        foreach ($beaches as $beach) {
            Beach::create([
                'name' => $beach,
                'slug' => strtolower(str_replace(' ', '-', $beach)),
                'description' => null,
                'photos' => [],
            ]);
        }
    }
}
