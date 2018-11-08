@push('styles')
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@endpush
@push('scripts')
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
@endpush


@extends('layouts.base')

@section('title', 'Home')

@section('content')


<form class="" action="insertgenre" method="post">
  @csrf 
  <label for="">Entrer un nouveau genre:</label>
  <input type="text" name="newgenre" value="" placeholder="ex:fantasy " >

  <input type="submit" name="" value="Ajouter">

</form>
@endsection
