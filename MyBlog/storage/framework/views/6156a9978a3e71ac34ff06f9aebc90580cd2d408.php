<?php $__env->startSection('breadcrumb'); ?>
    <?php echo Breadcrumbs::render('home'); ?>

    <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-md-8">
        <h2>
            Listado de Productos
            <a href="<?php echo e(route('products.create')); ?>" class="btn btn-primary pull-right">Nuevo</a>
        </h2>
        <?php echo $__env->make('products.fragment.info', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <table class="table table-hover table-stripped">
            <thead>
            <tr>
                <th width="20px">ID</th>
                <th>Nombre del producto</th>
                <th colspan="3">&nbsp;</th>
            </tr>
            </thead>

            <tbody>
            <?php if(count($products)>0): ?>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($product->id); ?></td>
                    <td>
                        <strong><?php echo e($product->name); ?></strong>
                        <?php echo e($product->short); ?>

                    </td>
                    <td>
                        <a href="<?php echo e(route('products.show', $product->id)); ?>" class="btn btn-link">
                            Ver
                        </a>
                    </td>
                    <td>
                        <a href="<?php echo e(route('products.edit', $product->id)); ?>" class="btn btn-link">
                            Editar
                        </a>
                    </td>
                    <td>
                        <form action="<?php echo e(route('products.destroy', $product->id)); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-link">Borrar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">
                        <h4>No hay productos registrados</h4>
                    </td>
                </tr>
            <?php endif; ?>
            </tbody>


        </table>
        <?php echo $products->render(); ?>

    </div>



    <div class="col-md-4">
        <?php echo $__env->make('products.fragment.aside', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>