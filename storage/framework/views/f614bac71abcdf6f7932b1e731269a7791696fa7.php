<html>

<script>

  const csrf_token = '<?php echo e(csrf_token()); ?>';
  const BASE_URL_CERCA="<?php echo e(url('/')); ?>";

</script> 

<link rel = "stylesheet" href = "<?php echo e(url ("css/crea_lista.css")); ?>">
<script src='<?php echo e(url("js/crea_lista.js")); ?>' defer></script>




<?php $__env->startSection('title', 'Crea lista'); ?>

<?php $__env->startSection('nav'); ?>


<?php $__env->startSection('content'); ?>


<div id = "main">

<p> Inserisci il nome della lista che vuoi creare: </p>

<form id = "form_inserimento">
<input type = "search" placeholder = "Inserisci nome..." id = "nome_lista"> 
</form>

</div>

<div id = "conferma_creazione">  </div>

</html>


<?php echo $__env->make('layouts.layout_base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\hw2\resources\views/crea_liste.blade.php ENDPATH**/ ?>