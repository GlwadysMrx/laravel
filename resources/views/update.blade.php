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
    <select multiple class="" name="actors[]">
      <option value="" selected></option>
        @foreach ($actors as $actor)
            <option value="{{ $actor->id }}"
                @foreach ($serie->actors as $serieActor)
                  @if ($serieActor->id  === $actor->id)
                    selected
                  @endif
                  @endforeach
              >{{ $actor->completeName()}}</option>
              @endforeach
        {{-- TERNARY <option @php $actor->id === $serie->actors[0]->id ? 'select' : '';@endphp value="{{ $actor->id }}">{{ $actor->completeName()}}
        </option>--}}
    </select>
    <label for="">Modifier le nom de l'acteur :</label>
    <input type="text" name="updatename" value="" placeholder="">

    <label for="">Genres existants : </label>
    <select multiple class="" name="genres[]">
      <option value="" selected></option>
        @foreach ($genres as $genre)
            <option value="{{ $genre->id }}"
                @foreach ($serie->genres as $serieGenre)
                  @if ($serieGenre->id  === $genre->id)
                    selected
                  @endif
                  @endforeach
              >{{ $genre->name }}</option>
              @endforeach
    </select>
    <label for="">Modifier le nom du genre :</label>
    <input type="text" name="updategenre" value="" placeholder="">

    <input type="submit" name="" value="Modifier">
  </form>
@endsection
