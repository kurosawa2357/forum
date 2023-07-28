<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-app-layout>
    <head>
        <meta charset="utf-8">
        <title>Forum</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
        <div class='games'>
           
            @forelse($games as $game)
               <div class='game'>
                    <a href="/leagues/{{ $game->league->id }}"><nobr>{{ $game->league->name }}</nobr></a>
                    <a href='/games/{{ $game->id }}'><nobr>{{ $game->home_team->name }} VS {{ $game->away_team->name }}</nobr></a>
                 </div>
            @empty
            <p>試合はありません</p>
            @endforelse
        </div>
    </body>
    </x-app-layout>
</html>