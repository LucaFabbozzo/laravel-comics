@php
    $menu = config('db.main_menu');
@endphp



<div class="up"></div>
  <div class="container">
    <header>
      <div class="logo">
        <a href="{{ route('home')}}"><img src="{{Vite::asset('resources/images/dc-logo.png') }}" alt="Logo" /></a>
      </div>
      <nav>
        <ul>
        @foreach ($menu as $link)
            @php
                $class_active = Route::currentRouteName() === $link['route_name'] ? 'active' : '';
            @endphp
            <li><a class="{{$class_active}} line" href="{{ route($link['route_name'])}}">{{$link['text']}}</a></li>
         @endforeach
        </ul>
      </nav>
    </header>
  </div>
