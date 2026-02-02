<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos Alonso</title>
</head>
<body>

<?php if(session('success')): ?>
    <p style="color:green"><?php echo e(session('success')); ?></p>
<?php endif; ?>

<a href="<?php echo e(route('productsagv.create')); ?>">Nuevo producto</a>

<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Acciones</th>
    </tr>

    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($product->name); ?></td>
        <td><?php echo e($product->price); ?></td>
        <td><?php echo e($product->stock); ?></td>
        <td>
            <a href="<?php echo e(route('productsagv.edit', $product)); ?>">Editar</a>

            <form action="<?php echo e(route('productsagv.destroy', $product)); ?>" method="POST" style="display:inline;">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit">Eliminar</button>
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

</body>
</html>
<?php /**PATH C:\Users\CampusFP\ExamenLaravelagv\resources\views/productsagv/indexagv.blade.php ENDPATH**/ ?>