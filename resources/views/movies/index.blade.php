@extends('layouts.principal')

@section('conteudo')
<header>
    <form id="form" action="/" method="GET">
        <input type="text" placeholder="Search" id="search" class="search" name="busca">
    </form>
</header>

<main id="main">
    @foreach ($movies as $movie)
    <div class="movie">
        <a href={{ route('movie.show', $movie['id']) }}>
            <img src="{{'https://image.tmdb.org/t/p/w500' . $movie['poster_path'] }}" alt="poster">
        </a>

        <div class="movie-info">
            <h3>{{$movie['title']}}</h3>
        </div>

        <div class="desc">
            <p><strong>Gêneros:</strong> {{ implode(', ', $movie['genres']) }}</p>
            <p><strong>Lançamento:</strong> {{$movie['release_date']}}</p>
            <p><strong>Nota:</strong> {{$movie['vote_average'] * 10 }}%</p>
        </div>

        <div class="acoes">
            <a class="btn btn--vermelho" href="{{ route('movie.show', $movie['id']) }}">Ver detalhes</a>
        </div>
    </div>
    @endforeach
</div>
@endsection
