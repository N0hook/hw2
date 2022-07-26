<html>

<head>

<title> Login </title>
<link rel = "stylesheet" href = "<?php echo e(url ("css/login.css")); ?>">


</head>

<body>

<main>

<form method = "post">

<h1> Bentornato <br></br> </h1>

</main>

<section>

<div id = blocco_risposte>

<?php if($errore == 'campo_vuoto'): ?>
<div class = 'errore'> Riempi tutti campi </div>
<?php endif; ?>

<?php if($errore == 'utente_non_esistente'): ?>
<div class = 'errore'> Il nome utente inserito non è esistente, riprovare </div>
<?php endif; ?>

<?php if($errore == 'password_sbagliata'): ?>
<div class = 'errore'> La password inserita non è corretta, riprovare </div>
<?php endif; ?>



<form method = "post">  

<?php echo csrf_field(); ?>

<p> Inserisci i tuoi dati: </p>
<p><label> Username: <input name = "username" id = "username"><label></br> </p>
<p><label> Password: <input type = password input name = "password" id = "password"><label></br> </p>

<a id = button1 href = "<?php echo e(url('signup')); ?>"> Indietro </a>
<input id = button2 type = "submit"  value = "Accedi" >

</div>
</form>

</section>

</body>

</html><?php /**PATH C:\xampp2\htdocs\hw2\resources\views/login.blade.php ENDPATH**/ ?>