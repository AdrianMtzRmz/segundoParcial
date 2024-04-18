<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = DB::table('albums')
                    ->join('artists', 'artists.id', '=', 'albums.artist_id')
                    ->join('genres', 'genres.id', '=', 'albums.genre_id')
                    ->select('albums.id', 'albums.album_name', 'albums.date_released', 'artists.artist_name', 'genres.genre_name')
                    ->get();

        //dd($albums);

        return view('albums.index', compact('albums'));
    }
}
