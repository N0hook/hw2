
<html>

<link rel = "stylesheet" href = "<?php echo e(url ("css/preferiti.css")); ?>">
<script src='<?php echo e(url("js/carica_preferiti.js")); ?>' defer></script>



<?php $__env->startSection('title', 'I tuoi preferiti'); ?>


<?php $__env->startSection('content'); ?>

<section>

<p> Bentornato <?php echo e($username); ?>, ecco i tuoi preferiti: </p></br>

<div class = "container_album">
         
 </div> 

</section>

 </html>


<?php echo $__env->make('layouts.layout_base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\hw2\resources\views/preferiti.blade.php ENDPATH**/ ?>