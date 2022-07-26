<html>

<html>

<link rel = "stylesheet" href = "<?php echo e(url ("css/classifica.css")); ?>">
<script src='<?php echo e(url("js/classifica.js")); ?>' defer></script>

<script type="text/javascript">

    const BASE_URL_CLASSIFICA ="<?php echo e(url('/')); ?>";

</script>




<?php $__env->startSection('title', 'Ultime uscite'); ?>


<?php $__env->startSection('content'); ?>

<section>

<div id = "main">

<p> Visualizza la lista aggiornata delle ultime uscite, globale o per paese (inserendo il codice corrispondente): </p> <br> </br>

<form id = "form_ricerca">
<input type = "search" placeholder = "IT, es, globale, ecc..." id = "cerca_classifica">
</form>

</div>

<div id = "dati_classifica"> </div>

</section> 

</html>
<?php echo $__env->make('layouts.layout_base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\hw2\resources\views/visualizza_classifica.blade.php ENDPATH**/ ?>