<html>

<link rel = "stylesheet" href = "{{ url ("css/home.css") }}">
<script src='{{ url("js/home.js") }}' defer></script>
<script src='{{ url("js/cambia_pagina_cerca.js") }}' defer></script>
<script src='{{ url("js/cambia_pagina_classifica.js") }}' defer></script>
<script src='{{ url("js/cambia_pagina_liste.js") }}' defer></script>


<script type="text/javascript">

    const BASE_URL="{{url('/')}}";

</script>


@extends('layouts.layout_base')

@section('title', 'Unlimited music')


@section('content')

<header> 

<div id = "overlay"></div>

</header>

<div id = "main">

<h4> Benvenuto su Unlimited Music, il portale dedicato alla musica <br/> in cui è possibile accedere a tutte le informazioni sui tuoi dischi preferiti </h4><br/>

</div>

<div class = "container">

<img />

<p></p> 

</div>

<div class = "container">

<p></p>

<img/>

</div>

<div class = "container">

<img />

<p></p>
</div>


<div class = "container">

<p> </p> 

<img />

</div>




</html>