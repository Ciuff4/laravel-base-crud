@extends('layouts.main')

@section('content')
<h1>the Comics</h1>
<div class="container">
   @foreach ($comics as $comic)
   <div class="card">
       <h4>{{ $comic->title }}</h4>
       <img src="{{ $comic->image }}" alt="">
       <p>{{ $comic->type}}</p>
   </div>
   @endforeach
</div>
@endsection
