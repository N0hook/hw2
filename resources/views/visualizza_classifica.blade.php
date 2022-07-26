<html>

<html>

<link rel = "stylesheet" href = "{{ url ("css/classifica.css") }}">
<script src='{{ url("js/classifica.js") }}' defer></script>

<script type="text/javascript">

    const BASE_URL_CLASSIFICA ="{{url('/')}}";

</script>


@extends('layouts.layout_base')

@section('title', 'Ultime uscite')


@section('content')

<section>

<div id = "main">

<p> Visualizza la lista aggiornata delle ultime uscite, globale o per paese (inserendo il codice corrispondente): </p> <br> </br>

<form id = "form_ricerca">
<input type = "search" placeholder = "IT, es, globale, ecc..." id = "cerca_classifica">
</form>

</div>

<div id = "dati_classifica"> </div>

</section> 

</html>