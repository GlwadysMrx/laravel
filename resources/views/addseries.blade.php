@push('styles')
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@endpush
@push('scripts')
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
@endpush


@extends('layouts.base')

@section('title', 'Home')

@section('content')
  <h1>Ajouter une série</h1>
  <form class="" action="/insertserie" method="POST">
     @csrf  {{--à ajouter à chaque formulair --sécurité --}}
    <label for="">Nom : </label>
    <input required type="text" name="title" value="" placeholder="ex:Peaky Blinders">

    <label for="">Date de publication : </label>
    <input required type="number" name="publication_year" value="" placeholder="ex:2015">

    <label for="">Acteurs existants : </label>
    <select class="" name="actors">
      <option value="" selected></option>
        @foreach ($actors as $actor)
          <option value="{{ $actor->id }}">
          {{ $actor->completeName()}}
        </option>
        @endforeach
    </select>

    <label for="">Entrer un nouvel acteur:</label>
    <input type="text" name="newname" value="" placeholder="ex:Pitt ">

    <label for="">Genres existants : </label>
    <select class="" name="genres">
      <option value="" selected></option>
      @foreach ($genres as $genre)
        <option value="{{ $genre->id }}">
        {{ $genre->name }}
      </option>
      @endforeach
    </select>

    <label for="">Entrer un nouveau genre:</label>
    <input type="text" name="newgenre" value="" placeholder="ex:Fantasy">

    <input type="submit" name="" value="Ajouter">
  </form>
@endsection
