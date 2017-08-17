@extends('layouts.master')

@section('css')
<link href="{{asset('css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
@endsection

@section('title',$titulo)

@section('contenido')
	<table class="table table-striped dataTables-example" id="tablaAjax">
	    <thead>
	      <tr>
	        <th>ID</th>
	        <th>NOMBRE</th>
	        <th>CORREO</th>
            <th>ACCION</th>
	      </tr>
	    </thead>
	    <!--
        <tbody>
		@foreach($data as $fila)
			<tr>
				<td>{{ $fila->id }}</td>
				<td>{{ $fila->name }}</td>
				<td>{{ $fila->email }}</td>
			</tr>
		@endforeach
		</tbody>        
        -->
	</table>


	{{$data2->name}}
	<p>{{ $contenido }}</p>

@endsection

@section('js')
<script src="{{asset('js/plugins/jeditable/jquery.jeditable.js')}}"></script>
<script src="{{asset('js/plugins/dataTables/datatables.min.js')}}"></script>
<script>
$(function() {
    
    $('#tablaAjax').DataTable({
        processing: true,
        serverSide: true,
        bAutoWidth: false,
        aaSorting: [],
        language:{"url": window.Laravel.url+"/js/data-table-spanish.json"},
        ajax: {
                url: '{!! route('usuarios.showTable') !!}',
                type: "POST",
                data: {"_token":"{{ csrf_token() }}"}
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
                show="{!!URL::to('usuarios/"+cellData+"')!!}";
                edit="{!!URL::to('usuarios/"+cellData+"/edit')!!}";
                deleted="{!!URL::to('usuarios/"+cellData+"')!!}";
                $(td).html(buttonsTable(show,edit,deleted,true));
            }
        }/*,
        {
            targets: 3,
            createdCell: function (td, cellData, rowData, row, col) {
                if(cellData==1){
                    $(td).html('Si');
                }else{
                    $(td).html('No');
                }
            }
        }*/
        ]
    });
    
});
   

        /*$(document).ready(function(){
            $('.dataTables-example').DataTable({
                order: [],
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

            
            var oTable = $('#editable').DataTable();

            
            oTable.$('td').editable( '../example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            } );


        });

        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData( [
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row" ] );

        }*/
    </script>
@endsection