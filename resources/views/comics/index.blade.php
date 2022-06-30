@extends('layouts.main')

@section('content')
<h1>the Comics</h1>
<div class="container d-flex flex-wrap justify-content-center">
   @foreach ($comics as $comic)
   <div class="card w-25 px-1">
       <h4>{{ $comic->title }}</h4>
       <img class="w-100" src="{{ $comic->image }}" alt="">
       <p>{{ $comic->type}}</p>
   </div>
   @endforeach
</div>
@endsection
