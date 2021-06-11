@extends('layouts.principal')

@section('conteudo')
    <div class="movie-details border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flexe"></div>
        <img src="{{'https://image.tmdb.org/t/p/w500' . $movie['poster_path']}}" alt="poster">
        <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis blanditiis error consequuntur
            recusandae molestiae odit totam similique aliquam? Et animi nobis
            officia nemo saepe corporis ea sapiente deleniti! Provident, vitae.
        </div>

    </div>
@endsection
