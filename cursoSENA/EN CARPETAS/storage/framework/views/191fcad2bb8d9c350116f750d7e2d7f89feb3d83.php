

<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('css/lib/dataTables/datatables.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
    <a href="<?php echo e(route('usuario.create')); ?>">
    <button type="button" class="btn btn-primary">Crear Usuario</button></a>

    <br><br>
	
    <table class="table table-striped dataTables-example" id="tablaAjax">
	    <thead>
	      <tr>
	        <th>ID</th>
	        <th>NOMBRE</th>
	        <th>CORREO</th>
            <th>ACCION</th>
	      </tr>
	    </thead>
	</table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="<?php echo e(asset('js/lib/dataTables/datatables.min.js')); ?>"></script>
<script>
$(function() {
    
    $('#tablaAjax').DataTable({
        processing: true,
        serverSide: true,
        bAutoWidth: false,
        aaSorting: [],
        language:{"url": window.Laravel.url+"/js/lib/dataTables/data-table-spanish.json"},
        ajax: {
                url: '<?php echo route('usuario.showTable'); ?>',
                type: "POST",
                data: {"_token":"<?php echo e(csrf_token()); ?>"}
                },
        columns: [                    
                { data: 'id', name: 'id', className:'center' },
                { data: 'name', name: 'name' },                
                { data: 'email', name: 'email', className:'hidden-480' },
                { data: 'id', name: 'id', className:'center'}
            ],
        columnDefs: [
        {
            targets: 3,
            createdCell: function (td, cellData, rowData, row, col) {
                show="<?php echo URL::to('usuario/"+cellData+"'); ?>";
                edit="<?php echo URL::to('usuario/"+cellData+"/edit'); ?>";
                deleted="<?php echo URL::to('usuario/"+cellData+"'); ?>";
                $(td).html(buttonsTable(show,edit,deleted,true));
            }
        }
        ]
    });
    
});
 </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>