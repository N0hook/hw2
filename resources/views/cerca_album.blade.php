<html>

<script>

  const csrf_token = '{{ csrf_token() }}';
  const BASE_URL_CERCA="{{url('/')}}";

</script> 

<link rel = "stylesheet" href = "{{ url ("css/cerca_album.css") }}">
<script src='{{ url("js/cerca_album.js") }}' defer></script>


@extends('layouts.layout_base')

@section('title', 'Cerca album')

@section('nav')


@section('content')


<div id = "main">

<p> Inserisci il nome dell'album che vorresti trovare. Se conosci il nome del suo autore, specificalo per velocizzare la ricerca: </p>

<form id = "form_ricerca">
<input type = "search" placeholder = "Cerca album..." id = "nome_album"> 
</form>

</div>

<div id = "dati_album">  </div>

</html>

