<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset ('/css/styles.css')}}">
    <title>Move App</title>
</head>
<body>
    <header>
        <form id="form">
            <input type="text" placeholder="Search" id="search" class="search">
        </form>
    </header>
    
    <main id="main">
        @foreach ($movie as $mov)    
        <div class="movie">
            <a href={{route('movie.show')}}>
            <img src="{{'https://image.tmdb.org/t/p/w500' .$mov ['poster_path']}}" alt="poster">
            </a>
                
            <div class="movie-info">
                <h3>{{$mov ['title']}}</h3>
                
            </div>
            
            <div class="desc">
                @foreach ($mov ['genre_ids'] as $genre)
                {{$genres->get($genre)}}@if($loop->last), @endif
                @endforeach
                <span>|</span>
                <span>{{$mov ['release_date']}}</span>
                <span>|</span>
                <span>Avarege:</span>
                <span>{{$mov['vote_average'] * 10 }}</span>
                <span>%</span>
            </div>
            
            <div class="overview">
                <h3>Sinopse</h3>
                {{$mov ['overview']}}    
            </div>    
        </div>
        @endforeach          
</body>
</html>