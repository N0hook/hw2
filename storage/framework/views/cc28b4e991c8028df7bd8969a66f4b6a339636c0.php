<html>

<script>

  const csrf_token = '<?php echo e(csrf_token()); ?>';
  const BASE_URL_CERCA="<?php echo e(url('/')); ?>";

</script> 

<link rel = "stylesheet" href = "<?php echo e(url ("css/cerca_album.css")); ?>">
<script src='<?php echo e(url("js/cerca_album.js")); ?>' defer></script>




<?php $__env->startSection('title', 'Cerca album'); ?>

<?php $__env->startSection('nav'); ?>


<?php $__env->startSection('content'); ?>


<div id = "main">

<p> Inserisci il nome dell'album che vorresti trovare. Se conosci il nome del suo autore, specificalo per velocizzare la ricerca: </p>

<form id = "form_ricerca">
<input type = "search" placeholder = "Cerca album..." id = "nome_album"> 
</form>

</div>

<div id = "dati_album">  </div>

</html>


<?php echo $__env->make('layouts.layout_base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp4\htdocs\hw2\resources\views/cerca_album.blade.php ENDPATH**/ ?>