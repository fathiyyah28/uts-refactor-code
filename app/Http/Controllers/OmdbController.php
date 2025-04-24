<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OmdbController extends Controller
{
    public function search(Request $request)
    {
        $title = $request->input('title', 'Batman');
        $apiKey = env('OMDB_API_KEY');

        $response = Http::get("https://www.omdbapi.com/", [
            's' => $title,
            'apikey' => $apiKey
        ]);

        //dd($response->json()); // Ini untuk cek apakah sudah terkoneksi dengan API

        $movies = $response->json();
        return view('omdb.result', compact('movies'));
    }
}
