@extends('layouts.main')

@section('content')
<h1 class="text-center py-2">the Comics</h1>
<div class="container mb-2">
    <a href="{{route('comics.create')}}" class="btn btn-success">Aggiungi nuovo comic</a>
</div>
<div class="container d-flex justify-content-center">

    <table class="table table-striped">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Tipologia</th>
              <th scope="col">Gestisci</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
            <tr>
              <th scope="row">{{$comic->id}}</th>
              <td>{{$comic->title}}</td>
              <td>{{$comic->type}}</td>
              <td>
                <a href="{{route('comics.show', $comic)}}" class="btn btn-primary">Mostra</a>
                <a href="{{route('comics.edit', $comic)}}" class="btn btn-warning">Modifica</a>
                <form class="d-inline" action="{{route('comics.destroy', $comic)}}"
                method="POST">
                @method('DELETE')
                @csrf
                <input type="submit" value="Elimina" class="btn btn-danger">
                </form>
              </td>
            </tr>
            @endforeach

        </tbody>

    </table>
</div>
@endsection
