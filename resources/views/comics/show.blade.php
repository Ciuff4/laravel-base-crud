@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col-6">
            <img class="image-fluid" src="{{$comic->image}}" alt="">
            <h4>{{$comic->title}}</h4>
            <span class="badge text-bg-info">{{$comic->type}}</span>
        </div>
        <div class="col-6">
            <a href="{{route('comics.index')}}" class="btn btn-primary mt-3">Torna al menù</a>
        </div>
    </div>
</div>
@endsection
