@push('styles')
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@endpush
@push('scripts')
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
@endpush


@extends('layouts.base')

@section('title', 'Home')

@section('content')

  <form class="" action="insertactor" method="post">
    @csrf 
    <label for="">Entrer un nouvel acteur:</label>
    <input type="text" name="newname" value="" placeholder="ex:name " >
    <input type="text" name="newsurname" value="" placeholder="ex:surname " >
    <input type="submit" name="" value="Ajouter">

  </form>
@endsection
