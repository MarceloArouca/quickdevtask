<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\App\config\services;
use Illuminate\App\Http\Controllers;
//use GuzzleHttp\Client;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    $movie = Http::get('https://api.themoviedb.org/3/movie/popular?api_key=4ec327e462149c3710d63be84b81cf4f')
    ->json()['results'];

    $genresArray = Http::get('https://api.themoviedb.org/3/genre/movie/list?api_key=4ec327e462149c3710d63be84b81cf4f')
    ->json()['genres'];
    

    $genres = collect($genresArray)->mapwithKeys(function($genre){
        return [$genre['id']=> $genre['name']];
    });
    dump($genresArray);

        return view('index', [
            'movie' => $movie,
            'genres' => $genres,    
        ]);
        
    

    }

 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      return view('movie.show',[ 
        'movie.show' =>$id, 
      ])};

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
