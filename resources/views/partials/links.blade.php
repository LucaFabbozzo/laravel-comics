@php
    $links = config('db.links_menu');
@endphp



<section>
    <div class="links-bottom">
      <div class="container menu">
        <ul>
        @foreach ($links as $buy)
            <li>
            <img src="{{Vite::asset($buy['img'])}}" alt="{{$buy['text']}}">
            <a href="#">{{$buy['text']}}</a>
          </li>
        @endforeach
        </ul>
      </div>
    </div>
</section>
