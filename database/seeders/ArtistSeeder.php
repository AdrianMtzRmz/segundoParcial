<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artist;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run(): void
    {
        $artist = new Artist();
        $artist -> artist_name = "Hugo";
        $artist -> save();

        $artist = new Artist();
        $artist -> artist_name = "Paco";
        $artist -> save();

        $artist = new Artist();
        $artist -> artist_name = "Luis";
        $artist -> save();

        $artist = new Artist();
        $artist -> artist_name = "Manolo";
        $artist -> save();

        $artist = new Artist();
        $artist -> artist_name = "Tomate";
        $artist -> save();
    }
}
