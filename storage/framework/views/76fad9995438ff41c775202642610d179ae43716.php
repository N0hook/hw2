<html>
<!-- Form per l'invio dei dati visualizzati dall'utente-->

<head>

<title> Registrati </title>

<link rel = "stylesheet" href = "<?php echo e(url ("css/signup.css")); ?>">
<script src='<?php echo e(url("js/signup.js")); ?>' defer></script>


</head>

<body>


<section>

<div id = "blocco_risposte">

<h1> Registrati al nostro sito per accedere alle funzionalità complete: <br></br> </h1>

<?php if($errore == 'utente_esistente'): ?>
<div class = 'errore'> Il nome utente scelto è già esistente, indicarne un altro </div>
<?php endif; ?>
<?php if($errore == 'password_breve'): ?>
<div class = 'errore'> La password inserita è troppo breve. Inserire almeno 8 caratteri </div>
<?php endif; ?>
<?php if($errore == 'password_scorretta'): ?>
<div class = 'errore'> La password inserita non è valida. Inserire almeno un carattere speciale, un numero e una maiuscola </div>
<?php endif; ?>
<?php if($errore == 'password_sbagliata'): ?>
<div class = 'errore'> La password e la password di conferma non coincidono. Riprovare </div>
<?php endif; ?>
<?php if($errore == 'mail_scorretta'): ?>
<div class = 'errore'> La mail inserita non è valida. Riprovare </div>
<?php endif; ?>



<form method = "post">  

<?php echo csrf_field(); ?>

<p><div class = "nome_utente">
<label> Nome: <input name = 'nome' id = 'nome' value = '<?php echo e(old("nome")); ?>'></label> </br>
<span class = "hidden"> Questo campo è obbligatorio </span> </div> </p>

<p><div class = "cognome_utente">
<label> Cognome: <input name = 'cognome' id = 'cognome' value = '<?php echo e(old("cognome")); ?>'></label> </br>
<span class = "hidden"> Questo campo è obbligatorio </span> </div> </p>

<p><div class = "username_utente">
<label> Username: <input name = 'username' id = 'username' value = '<?php echo e(old("username")); ?>'></label> </br>
<span class = "hidden"> Questo campo è obbligatorio </span> </div> </p>

<p><div class = "email_utente">
<label> E-mail: <input name = 'email' id = 'email' value = '<?php echo e(old("email")); ?>'></label> </br>
<span class = "hidden"> Questo campo è obbligatorio </span> </div> </p>

<p><div class = "password_utente">
<label> Password: <input type = 'password' input name = 'password' input id = 'password'></label> </br>
<span class = "hidden"> Questo campo è obbligatorio </span></div> </p>

<p><div class = "conferma_password_utente">
<label> Conferma password: <input type = 'password' input name = 'conferma_password' input id = 'conferma_password'></label> </br>
<span class = "hidden"> Questo campo è obbligatorio </span></div></p>

<a id = "button1" href = "<?php echo e(url('home')); ?>"> indietro </a>
<label>&nbsp; <input id = "button3" type  = "submit"  value = "Registrati" ></label>

</form>

<h1> Hai già un account? <a id = "button2" href = "<?php echo e(url('login')); ?>"> Accedi </a> </h1>

</div>

</section>

</body>

</html><?php /**PATH C:\xampp4\htdocs\hw2\resources\views/signup.blade.php ENDPATH**/ ?>