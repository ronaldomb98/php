<?php $__env->startSection('breadcrumb'); ?>
    <?php echo Breadcrumbs::render('edit',$product); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-md-8">
        <h2>
            <?php echo e($product->name); ?>

            <a href="<?php echo e(route('products.index')); ?>" class="btn btn-default pull-right">
                Listado
            </a>
        </h2>

        <?php echo $__env->make('products.fragment.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo Form::model($product, ['route' => ['products.update',$product->id], 'method' => 'PUT']); ?>

        <?php echo $__env->make('products.fragment.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo Form::close(); ?>

    </div>

    <div class="col-md-4">
        <div class="col-md-4">
            <?php echo $__env->make('products.fragment.aside', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>