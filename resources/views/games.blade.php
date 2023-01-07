@extends('layouts.main')

@section('content')
    <main>
    <div class="top-cards">
        <div class="container cards-games">
            @foreach ($games_list as $games)
            <div class="card-games">
                <img src="{{$games['img']}}" alt="">
                <h4>{{$games['text']}}</h4>
                @if ($games['is_available'])
                <p>Available Now</p>
                @else
                <p>Not Available</p>
                @endif
            </div>
            @endforeach
        </div>
    </div>
    </main>
@endsection

@section('title')
    Games
@endsection
