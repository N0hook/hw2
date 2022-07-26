<html>

<script>

  const csrf_token = '{{ csrf_token() }}';
  const BASE_URL_CERCA="{{url('/')}}";

</script> 

<link rel = "stylesheet" href = "{{ url ("css/crea_lista.css") }}">
<script src='{{ url("js/crea_lista.js") }}' defer></script>


@extends('layouts.layout_base')

@section('title', 'Crea lista')

@section('nav')


@section('content')


<div id = "main">

<p> Inserisci il nome della lista che vuoi creare: </p>

<form id = "form_inserimento">
<input type = "search" placeholder = "Inserisci nome..." id = "nome_lista"> 
</form>

</div>

<div id = "conferma_creazione">  </div>

</html>

