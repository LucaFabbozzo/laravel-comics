@extends('layouts.main')

@section('content')
    <main>
        <div class="container">
            <div class="detail-box">
                <h2>{{$comic["series"]}}</h2>
                <p>{{$comic["type"]}}</p>
                <a href="{{ route('comics')}}"><img src="{{$comic["thumb"]}}" alt="{{$comic["series"]}}"></a>
                <h4>Price: {{$comic["price"]}}</h4>
            </div>
        </div>
        <div class="container">
            <div class="house">
                <a href="{{ route('home')}}"><i class="fa-solid fa-house-chimney"></i></a>
            </div>
        </div>
    </main>
@endsection

@section('title')
    {{$comic["series"]}}
@endsection
