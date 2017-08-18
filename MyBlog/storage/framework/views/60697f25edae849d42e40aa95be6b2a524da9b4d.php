<div class="form-group">
    <?php echo Form::label('name','Nombre del producto'); ?>

    <?php echo Form::text('name',null,['class' => 'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::label('short','Descripción del producto'); ?>

    <?php echo Form::text('short',null,['class' => 'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::label('body','Descripción del producto'); ?>

    <?php echo Form::textarea('body',null,['class' => 'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::submit('ENVIAR',['class' => 'btn btn-primary']); ?>

</div>