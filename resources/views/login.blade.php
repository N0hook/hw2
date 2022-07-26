<html>

<head>

<title> Login </title>
<link rel = "stylesheet" href = "{{ url ("css/login.css") }}">


</head>

<body>

<main>

<form method = "post">

<h1> Bentornato <br></br> </h1>

</main>

<section>

<div id = blocco_risposte>

@if($errore == 'campo_vuoto')
<div class = 'errore'> Riempi tutti campi </div>
@endif

@if($errore == 'utente_non_esistente')
<div class = 'errore'> Il nome utente inserito non è esistente, riprovare </div>
@endif

@if($errore == 'password_sbagliata')
<div class = 'errore'> La password inserita non è corretta, riprovare </div>
@endif



<form method = "post">  

@csrf

<p> Inserisci i tuoi dati: </p>
<p><label> Username: <input name = "username" id = "username"><label></br> </p>
<p><label> Password: <input type = password input name = "password" id = "password"><label></br> </p>

<a id = button1 href = "{{ url('signup') }}"> Indietro </a>
<input id = button2 type = "submit"  value = "Accedi" >

</div>
</form>

</section>

</body>

</html>