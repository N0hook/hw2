
<html>

<link rel = "stylesheet" href = "{{ url ("css/preferiti.css") }}">
<script src='{{ url("js/carica_preferiti.js") }}' defer></script>

@extends('layouts.layout_base')

@section('title', 'I tuoi preferiti')


@section('content')

<section>

<p> Bentornato {{ $username }}, ecco i tuoi preferiti: </p></br>

<div class = "container_album">
         
 </div> 

</section>

 </html>

