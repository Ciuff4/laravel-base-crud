@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row">
        @if ($errors->any())
        <div class="col-8 offset-2 alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
        </div>
        @endif

    </div>
    <form action="{{route('comics.store')}}"
    method="POST">
    @csrf

        <div class="mb-3">
          <label for="title" class="form-label">Nome del Fumetto</label>
          <input type="input"
          class="form-control @error('title') is-invalid @enderror"
          id="title" name="title"
          placeholder="inserisci il Titolo">
          <p>@error('title')
            {{$message}}
          @enderror</p>
        </div>

        <div class="mb-3">
          <label for="type" class="form-label">Genere</label>
          <input type="input"
          class="form-control @error('title') is-invalid @enderror"
          id="type" name="type"
          placeholder="Inserisci il Genere">
          <p>@error('type')
            {{$message}}
          @enderror</p>
        </div>

        <div class="mb-3">
          <label for="image" class="form-label">Immagine</label>
          <input type="input"
          class="form-control @error('title') is-invalid @enderror"
          id="image" name="image"
          placeholder="inserisci il percorso dell'immagine">
          <p>@error('image')
            {{$message}}
          @enderror</p>
        </div>

        <button type="submit" class="btn btn-primary">Invio</button>

      </form>
</div>

@endsection
