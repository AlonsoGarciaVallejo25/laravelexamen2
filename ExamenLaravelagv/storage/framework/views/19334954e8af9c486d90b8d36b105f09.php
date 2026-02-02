<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear producto Alonso</title>
</head>
<body>

<?php if($errors->any()): ?>
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li style="color:red"><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php endif; ?>

<form method="POST" action="<?php echo e(route('productsagv.store')); ?>">
    <?php echo csrf_field(); ?>

    <input type="text" name="name" placeholder="Nombre" value="<?php echo e(old('name')); ?>"><br><br>
    <input type="number" step="0.01" name="price" placeholder="Precio" value="<?php echo e(old('price')); ?>"><br><br>
    <input type="number" name="stock" placeholder="Stock" value="<?php echo e(old('stock')); ?>"><br><br>

    <button type="submit">Guardar</button>
</form>

<a href="<?php echo e(route('productsagv.index')); ?>">Volver</a>

</body>
</html>
<?php /**PATH C:\Users\CampusFP\ExamenLaravelagv\resources\views/productsagv/createagv.blade.php ENDPATH**/ ?>