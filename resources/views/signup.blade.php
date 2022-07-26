<html>
<!-- Form per l'invio dei dati visualizzati dall'utente-->

<head>

<title> Registrati </title>

<link rel = "stylesheet" href = "{{ url ("css/signup.css") }}">
<script src='{{ url("js/signup.js") }}' defer></script>


</head>

<body>


<section>

<div id = "blocco_risposte">

<h1> Registrati al nostro sito per accedere alle funzionalità complete: <br></br> </h1>

@if($errore == 'utente_esistente')
<div class = 'errore'> Il nome utente scelto è già esistente, indicarne un altro </div>
@endif
@if($errore == 'password_breve')
<div class = 'errore'> La password inserita è troppo breve. Inserire almeno 8 caratteri </div>
@endif
@if($errore == 'password_scorretta')
<div class = 'errore'> La password inserita non è valida. Inserire almeno un carattere speciale, un numero e una maiuscola </div>
@endif
@if($errore == 'password_sbagliata')
<div class = 'errore'> La password e la password di conferma non coincidono. Riprovare </div>
@endif
@if($errore == 'mail_scorretta')
<div class = 'errore'> La mail inserita non è valida. Riprovare </div>
@endif



<form method = "post">  

@csrf

<p><div class = "nome_utente">
<label> Nome: <input name = 'nome' id = 'nome' value = '{{ old("nome") }}'></label> </br>
<span class = "hidden"> Questo campo è obbligatorio </span> </div> </p>

<p><div class = "cognome_utente">
<label> Cognome: <input name = 'cognome' id = 'cognome' value = '{{ old("cognome") }}'></label> </br>
<span class = "hidden"> Questo campo è obbligatorio </span> </div> </p>

<p><div class = "username_utente">
<label> Username: <input name = 'username' id = 'username' value = '{{ old("username") }}'></label> </br>
<span class = "hidden"> Questo campo è obbligatorio </span> </div> </p>

<p><div class = "email_utente">
<label> E-mail: <input name = 'email' id = 'email' value = '{{ old("email") }}'></label> </br>
<span class = "hidden"> Questo campo è obbligatorio </span> </div> </p>

<p><div class = "password_utente">
<label> Password: <input type = 'password' input name = 'password' input id = 'password'></label> </br>
<span class = "hidden"> Questo campo è obbligatorio </span></div> </p>

<p><div class = "conferma_password_utente">
<label> Conferma password: <input type = 'password' input name = 'conferma_password' input id = 'conferma_password'></label> </br>
<span class = "hidden"> Questo campo è obbligatorio </span></div></p>

<a id = "button1" href = "{{ url('home') }}"> indietro </a>
<label>&nbsp; <input id = "button3" type  = "submit"  value = "Registrati" ></label>

</form>

<h1> Hai già un account? <a id = "button2" href = "{{ url('login') }}"> Accedi </a> </h1>

</div>

</section>

</body>

</html>