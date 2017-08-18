<?php $__env->startSection('content'); ?>
<div class="col-md-offset-2 col-md-8">
    <div class="table-responsive"></div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Id Hobbie</th>
            <th>Name Hobbie</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($student->id); ?></td>
                <td><?php echo e($student->name); ?></td>
                <td><?php echo e($student->getHobbieName->id); ?></td>
                <td><?php echo e($student->getHobbieName->name); ?></td>

            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>