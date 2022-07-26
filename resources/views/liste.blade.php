<html>

<link rel = "stylesheet" href = "{{ url ("css/liste.css") }}">
<script src='{{ url("js/carica_liste.js") }}' defer></script>

@extends('layouts.layout_base')

@section('title', 'Le tue liste')


@section('content')

<section>

<p> Bentornato {{ $username }}, ecco le tue liste: </p></br>

<div class = "container_liste">
         
 </div> 

</section>

 </html>