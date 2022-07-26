
<html>


<head>

<meta charset="utf-8">

<title>  @yield('title')</title>

<link rel = "stylesheet" href = "{{ url ("css/layout.css") }}">




<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=BIZ+UDPMincho&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=BIZ+UDPMincho&family=Familjen+Grotesk&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=BIZ+UDPMincho&family=Dancing+Script&family=Familjen+Grotesk&family=IBM+Plex+Sans+Arabic:wght@100&family=Kalam:wght@300&family=Lobster&family=Nanum+Gothic&family=Nanum+Myeongjo&family=Russo+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=BIZ+UDPMincho&family=Dancing+Script&family=Familjen+Grotesk&family=IBM+Plex+Sans+Arabic:wght@100&family=Kalam:wght@300&family=Lobster&family=Nanum+Gothic&family=Nanum+Myeongjo&family=Russo+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=BIZ+UDPMincho&family=Dancing+Script&family=Familjen+Grotesk&family=IBM+Plex+Sans+Arabic:wght@100&family=Kalam:wght@300&family=Lobster&family=Nanum+Gothic&family=Nanum+Myeongjo&family=Neuton:wght@200&family=Russo+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=BIZ+UDPMincho&family=Dancing+Script&family=Familjen+Grotesk&family=IBM+Plex+Sans+Arabic:wght@100&family=Kalam:wght@300&family=Lobster&family=Mukta:wght@200&family=Nanum+Gothic&family=Nanum+Myeongjo&family=Neuton:wght@200&family=Russo+One&display=swap" rel="stylesheet">

</head>


<body>

@section('nav')
<nav>

<div id = "logo"> <strong>Unlimited music<br/> </strong>
<em>La tua libreria musicale</em></div>

<div id = "links">

<a href = "{{ url('home') }}" > Home </a>
<a href = "{{ url('liste') }}"> Le tue liste </a>
<a href = "{{ url('preferiti') }}"> Preferiti </a>
<a> Chi siamo </a>



  @if(Session::get('username')) 
  
    <a id = 'button' href = "{{url('logout')}}"> Logout </a>

  
  @else
  
    <a id = 'button' href = "{{ url('signup') }}"> Registrati o accedi </a>

  @endif
 


</div>

</nav>
@show

<section>

@yield('content')


</section>



<footer>

@section('footer')
<p> Per info: </p>
<address> Tinnirello Marica 1000005808</address>
@show

</footer>

</body>

</html>
