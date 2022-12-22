<div class="up"></div>
  <div class="container">
    <header>
      <div class="logo">
        <a href="{{ route('home')}}"><img src="{{Vite::asset('resources/images/dc-logo.png') }}" alt="Logo" /></a>
      </div>
      <nav>
        <ul>
          <li><a class="{{Route::currentRouteName() === 'characters' ? 'active' : ''}} line" href="{{ route('characters')}}">Characters</a></li>
          <li><a class="{{Route::currentRouteName() === 'comics' ? 'active' : ''}} line"  href="{{route('comics')}}">Comics</a></li>
          <li><a class="{{Route::currentRouteName() === 'movies' ? 'active' : ''}} line" href="{{route('movies')}}">Movies</a></li>
          <li><a class="{{Route::currentRouteName() === 'tv' ? 'active' : ''}} line" href="{{route('tv')}}">Tv</a></li>
          <li><a class="{{Route::currentRouteName() === 'games' ? 'active' : ''}} line" href="{{route('games')}}">Games</a></li>
          <li><a class="{{Route::currentRouteName() === 'collectibles' ? 'active' : ''}} line" href="{{route('collectibles')}}">Collectibles</a></li>
          <li><a class="{{Route::currentRouteName() === 'videos' ? 'active' : ''}} line" href="{{route('videos')}}">Videos</a></li>
          <li><a class="{{Route::currentRouteName() === 'fans' ? 'active' : ''}} line" href="{{route('fans')}}">Fans</a></li>
          <li><a class="{{Route::currentRouteName() === 'news' ? 'active' : ''}} line" href="{{route('news')}}">News</a></li>
          <li><a class="{{Route::currentRouteName() === 'shop' ? 'active' : ''}} line" href="{{route('shop')}}">Shop</a></li>
        </ul>
      </nav>
    </header>
  </div>
