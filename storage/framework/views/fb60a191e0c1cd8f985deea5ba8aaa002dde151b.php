<html>

<link rel = "stylesheet" href = "<?php echo e(url ("css/home.css")); ?>">
<script src='<?php echo e(url("js/home.js")); ?>' defer></script>
<script src='<?php echo e(url("js/cambia_pagina_cerca.js")); ?>' defer></script>
<script src='<?php echo e(url("js/cambia_pagina_classifica.js")); ?>' defer></script>
<script src='<?php echo e(url("js/cambia_pagina_liste.js")); ?>' defer></script>


<script type="text/javascript">

    const BASE_URL="<?php echo e(url('/')); ?>";

</script>




<?php $__env->startSection('title', 'Unlimited music'); ?>


<?php $__env->startSection('content'); ?>

<header> 

<div id = "overlay"></div>

</header>

<div id = "main">

<h4> Benvenuto su Unlimited Music, il portale dedicato alla musica <br/> in cui è possibile accedere a tutte le informazioni sui tuoi dischi preferiti </h4><br/>

</div>

<div class = "container">

<img />

<p></p> 

</div>

<div class = "container">

<p></p>

<img/>

</div>

<div class = "container">

<img />

<p></p>
</div>


<div class = "container">

<p> </p> 

<img />

</div>




</html>
<?php echo $__env->make('layouts.layout_base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\hw2\resources\views/home.blade.php ENDPATH**/ ?>