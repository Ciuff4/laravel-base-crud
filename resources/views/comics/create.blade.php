@extends('layouts.main')

@section('content')

<div class="container">
    <form action="{{route('comics.store')}}"
    method="POST">
    @csrf

        <div class="mb-3">
          <label for="title" class="form-label">Nome del Fumetto</label>
          <input type="input" class="form-control" id="title" name="title"
          placeholder="inserisci il Titolo">
        </div>

        <div class="mb-3">
          <label for="type" class="form-label">Genere</label>
          <input type="input" class="form-control" id="type" name="type"
          placeholder="Inserisci il Genere">
        </div>

        <div class="mb-3">
          <label for="image" class="form-label">Immagine</label>
          <input type="input" class="form-control" id="image" name="image"
          placeholder="inserisci il percorso dell'immagine">
        </div>

        <button type="submit" class="btn btn-primary">Invio</button>

      </form>
</div>

@endsection
