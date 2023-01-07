@extends('layouts.main')

@section('content')
    <main>
    <div class="top-cards">
        <div class="container cards">
            @foreach ($characters as $character)
            <div class="card-char">
                <a href="{{route('characters_detail', ["id" => $character["id"]])}}"><img src="{{$character['img']}}" alt="{{$character['text']}}"></a>
                <h4 class="name-char">{{$character["text"]}}</h4>
            </div>
            @endforeach
        </div>
    </div>
    </main>
@endsection

@section('title')
    Characters
@endsection
