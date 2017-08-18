<?php $__env->startSection('breadcrumb'); ?>
    <?php echo Breadcrumbs::render('show',$product); ?>

    <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-md-8">
    <h2>
        <?php echo e($product->name); ?>

        <a href="<?php echo e(route('products.edit', $product->id)); ?>" class="btn btn-default pull-right">
            Editar
        </a>
    </h2>
        <p><?php echo e($product->short); ?></p>
        <?php echo $product->body; ?>

    </div>

    <div class="col-md-4">
        <div class="col-md-4">
            <?php echo $__env->make('products.fragment.aside', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>