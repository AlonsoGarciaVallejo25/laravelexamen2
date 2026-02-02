<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar producto Alonso</title>
</head>
<body>

<h2>Editar producto</h2>

<?php if($errors->any()): ?>
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li style="color:red"><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php endif; ?>

<form method="POST" action="<?php echo e(route('productsagv.update', $productsagv)); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    <label>Nombre:</label><br>
    <input type="text" name="name" value="<?php echo e($productsagv->name); ?>"><br><br>

    <label>Precio:</label><br>
    <input type="number" step="0.01" name="price" value="<?php echo e($productsagv->price); ?>"><br><br>

    <label>Stock:</label><br>
    <input type="number" name="stock" value="<?php echo e($productsagv->stock); ?>"><br><br>

    <button type="submit">Actualizar</button>
</form>

<br>

<a href="<?php echo e(route('productsagv.index')); ?>">Volver al listado</a>

</body>
</html>
<?php /**PATH C:\Users\CampusFP\ExamenLaravelagv\resources\views/productsagv/editagv.blade.php ENDPATH**/ ?>