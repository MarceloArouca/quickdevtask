<?php

namespace App\Http\Controllers;

use App\Services\TmdbService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\App\config\services;
use Illuminate\App\Http\Controllers;

class MoviesController extends Controller
{
    public $token;

    public function __construct()
    {
        $this->token = config('services.tmdb.token');
        $this->url = config('services.tmdb.url');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->get('busca')) {
            $url = "{$this->url}/search/movie?query={$request->get('busca')}&api_key=$this->token";
        } else {
            $url = "{$this->url}/trending/movie/week?api_key=$this->token";
        }

        $movieList = Http::get($url)->json()['results'];

        $genresList = Http::get('{$this->url}/genre/movie/list?api_key=' . $this->token)
        ->json()['genres'];

        $movieListFormmated = array_map(function ($movieItem) use ($genresList) {
            $movieItem['genres'] = array_map(function ($genreId) use ($genresList) {
                return $genresList[array_search($genreId, array_column($genresList, 'id'))]['name'];
            }, $movieItem['genre_ids']);

            return $movieItem;
        }, $movieList);

        return view('movies.index', [
            'movies' => $movieListFormmated,
            'genres' => $genresList,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($movieId)
    {
        $movie = Http::get("{$this->url}/movie/{$movieId}?api_key={$this->token}")
        ->json();

        return view('movies.show', [
            'movie' => $movie,
        ]);
    }
}
