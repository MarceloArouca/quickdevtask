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
        <div class="movie">
            <img src="{{asset ('/images/exemple.png')}}" alt="Image">
            
            <div class="movie-info">
                <h3>Movie Title</h3>
                <span class="green">8</span>
            </div>
            
            <div class="overview">
                <h3>Sinopse</h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem quis hic pariatur placeat id voluptates, dolore dolores
            </div>    
        </div>
        
        <div class="movie">
            <img src="{{asset ('/images/exemple.png')}}" alt="Image">
            <div class="movie-info">
                <h3>Movie Title</h3>
                <span class="green"> 8 </span>
            </div>
            <div class="overview">
                <h3>Sinopse</h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem quis hic pariatur placeat id voluptates, dolore dolores voluptate dignissimos? Possimus.
            </div>    
        </div>
        
        <div class="movie">
            <img src="{{asset ('/images/exemple.png')}}" alt="Image">
            <div class="movie-info">
                <h3>Movie Title</h3>
                <span class="green"> 8 </span>
            </div>
            <div class="overview">
                <h3>Sinopse</h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem quis hic pariatur placeat id voluptates, dolore dolores voluptate dignissimos? Possimus.
            </div>    
        </div>
        
    </main>
    <script scr="scripts.js"></script>
</body>
</html>