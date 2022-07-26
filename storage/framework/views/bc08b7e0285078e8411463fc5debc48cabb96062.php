
<html>


<head>

<meta charset="utf-8">

<title>  <?php echo $__env->yieldContent('title'); ?></title>

<link rel = "stylesheet" href = "<?php echo e(url ("css/layout.css")); ?>">




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

<?php $__env->startSection('nav'); ?>
<nav>

<div id = "logo"> <strong>Unlimited music<br/> </strong>
<em>La tua libreria musicale</em></div>

<div id = "links">

<a href = "<?php echo e(url('home')); ?>" > Home </a>
<a href = "<?php echo e(url('liste')); ?>"> Le tue liste </a>
<a href = "<?php echo e(url('preferiti')); ?>"> Preferiti </a>
<a> Chi siamo </a>



  <?php if(Session::get('username')): ?> 
  
    <a id = 'button' href = "<?php echo e(url('logout')); ?>"> Logout </a>

  
  <?php else: ?>
  
    <a id = 'button' href = "<?php echo e(url('signup')); ?>"> Registrati o accedi </a>

  <?php endif; ?>
 


</div>

</nav>
<?php echo $__env->yieldSection(); ?>

<section>

<?php echo $__env->yieldContent('content'); ?>


</section>



<footer>

<?php $__env->startSection('footer'); ?>
<p> Per info: </p>
<address> Tinnirello Marica 1000005808</address>
<?php echo $__env->yieldSection(); ?>

</footer>

</body>

</html>
<?php /**PATH C:\xampp3\htdocs\hw2\resources\views/layouts/layout_base.blade.php ENDPATH**/ ?>