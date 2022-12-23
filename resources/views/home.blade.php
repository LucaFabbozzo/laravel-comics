@extends('layouts.main')

@section('content')
    <main>
      <div class="top-cards">
        <div class="container cards">
            @foreach ($cards_books as $card)
            <div class="card">
                <a href="{{route('comics_detail', ["id" => $card["id"]])}}"><img src="{{$card["thumb"]}}" alt="{{$card["series"]}}"></a>
                <h4>{{$card["series"]}}</h4>
            </div>
             @endforeach
      </div>
      <div class="btn">
        <a href="#">Load More</a>
      </div>
    </div>

    </main>
@endsection


