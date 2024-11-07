<?php

namespace App\Http\Controllers\artist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function index()
    {
        $artist = auth()->user()->artist;

        // Check if artist is not null before fetching related data
        $tracks = $artist?->tracks()?->where('approved', true)->latest()->take(5)->get() ?? collect();
        $events = $artist?->events()?->latest()->take(5)->get() ?? collect();

        return view('artist.dashboard', compact('artist', 'tracks', 'events'));
    }

}
