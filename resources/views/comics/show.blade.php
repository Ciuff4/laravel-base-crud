@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <img class="image-fluid" src="{{$comic->image}}" alt="">
            <h4>{{$comic->title}}</h4>
            <p class="badge text-bg-info">{{$comic->type}}</p>
        </div>
        <div class="col-6">

        </div>
    </div>
</div>
@endsection
