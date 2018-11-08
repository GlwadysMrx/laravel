@push('styles')
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
@endpush

@extends('layouts.base')

@section('title', 'Home')

@section('content')
  <h1>Liste des séries</h1>
  <table>
    <tr>
      <th>Name</th>
      <th>Year</th>
      <th>Actors</th>
      <th>Genres</th>
      <th>Delete</th>
      <th>Update</th>
    </tr>
      @foreach ($series as $serie)
        <tr>
          <td>{{$serie->title}}</td>
          <td>{{$serie->publication_year}}</td>
          <td>
            @foreach($serie->actors as $actor)
              {{ $actor->completeName() }}
              <form class="" action="/deleteactor" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $actor->id}}">
                <input type="submit" name="" value="X">
              </form>
            @endforeach
          </td>
          <td>
            @foreach($serie->genres as $genre)
              {{ $genre->name }}
              <form class="" action="/deletegenre" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $genre->id}}">
                <input type="submit" name="" value="X">
              </form>
            @endforeach
          </td>
          <td>
            <form class="" action="/deleteserie" method="post">
              @csrf
              <input type="hidden" name="id" value="{{ $serie->id}}">
              <input type="submit" name="" value="X">
            </form>
          </td>
          <td>
            <form class="" action="/updateserie" method="post">
              @csrf
              <input type="hidden" name="id" value="{{ $serie->id }}">
              <input type="submit" name="" value="U">
            </form>
          </td>
        </tr>
      @endforeach
  </table>
@endsection
