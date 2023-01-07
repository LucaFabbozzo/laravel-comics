@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="detail-box">
            <h2>{{$character['text']}}</h2>
            <a href="{{route('characters')}}"><img src="{{$character['img']}}" alt="{{$character['text']}}"></a>
        </div>
    </div>
    <div class="container">
        <div class="house">
             <div class="house">
                <a href="{{ route('home')}}"><i class="fa-solid fa-house-chimney"></i></a>
            </div>
        </div>
    </div>
@endsection


@section('title')

@endsection
