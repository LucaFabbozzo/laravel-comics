@extends('layouts.mainShop')

@section('content')
    <main>
         <div class="jumbotron">
          <div class="container">
            <img class="action" src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="Action Comics">
          </div>
          <div class="line-blue"></div>
         </div>
        <div class="container">
            <img class="shop" src="{{Vite::asset('resources/images/adv.jpg')}}" alt="adv">
        </div>
    </main>
@endsection

@section('title')
    Shop
@endsection
