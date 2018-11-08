@push('styles')
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@endpush
@push('scripts')
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
@endpush


@extends('layouts.base')

@section('title', 'Home')

@section('content')
  {{-- @dd($serie['publication_year']); --}}
  <h1>Modifier une série</h1>
  <form class="" action="/updateserieaction" method="POST">
     @csrf  {{--à ajouter à chaque formulaire --sécurité --}}
    <input type="hidden" name="id" value="{{ $serie->id }}">
    <label for="">Nom : </label>
    <input required type="text" name="title" value="{{ $serie->title }}">

    <label for="">Date de publication : </label>
    <input required type="number" name="publication_year" value="{{ $serie->publication_year }}">

    <label for="">Acteurs existants : </label>
    <select class="" name="actors">
      <option value="" selected></option>
        @foreach ($actors as $actor)
          @if ($actor->id  === $serie->actors[0]->id)
            <option selected value="{{ $actor->id }}">
              {{ $actor->completeName()}}
            </option>
        {{-- TERNARY <option @php $actor->id === $serie->actors[0]->id ? 'select' : '';@endphp value="{{ $actor->id }}">{{ $actor->completeName()}}
      </option>--}}
          @else
            <option value="{{ $actor->id }}">
              {{ $actor->completeName()}}
            </option>
          @endif
        @endforeach
    </select>
    <label for="">Modifier le nom de l'acteur :</label>
    <input type="text" name="updatename" value="{{ $actor->id }}" placeholder="">

    <label for="">Genres existants : </label>
    <select class="" name="genres">
      <option value="" selected></option>
      @foreach ($genres as $genre)
        @if ($genre->id  === $serie->genres[0]->id)
          <option selected value="{{ $genre->id }}">
            {{ $genre->name }}
          </option>
      @else
          <option value="{{ $genre->id }}">
            {{ $genre->name }}
          </option>
      @endif
      @endforeach
    </select>

    <input type="submit" name="" value="Modifier">
  </form>
@endsection
