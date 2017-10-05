
@extends('master')

@section('content')
<div class="container">
        <div class="text-center">
            <h1>People</h1>
            <hr>
        </div>
        <div class="pull-right">
          <a href="{{ route('people.create') }}">
            <button class="btn btn-primary" >
                New Person
            </button>
          </a>
            
        </div>
        <table class="table table-hover" id="tablaAjax">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Surname</th>    
                    <th>Sex</th>
                    <th>Birthday</th>
                    <th>Actions</th>
                </tr>
            </thead>

        </table>    
    </div>
@endsection

@section('js')
<script>

$(function() {
    
    $('#tablaAjax').DataTable({
        processing: true,
        serverSide: true,
        bAutoWidth: false,
        aaSorting: [],
        language:{"url": window.Laravel.url+"/js/lib/dataTables/data-table-spanish.json"},
        ajax: {
                url: '{!! route('showTable') !!}',
                type: "POST",
                data: {"_token":"{{ csrf_token() }}"}
                },
        columns: [                    
                { data: 'id', name: 'id', className:'center' },
                { data: 'name', name: 'name' },
                { data: 'surname', name: 'surname' },
                { data: 'sex', name: 'sex' },
                { data: 'birthday', name: 'birthday' },                
                { data: 'id', name: 'id', className:'center'}
            ],
        columnDefs: [
        {
            targets: 5,
            createdCell: function (td, cellData, rowData, row, col) {
                show="{!!URL::to('people/"+cellData+"')!!}";
                edit="{!!URL::to('people/"+cellData+"/edit')!!}";
                deleted="{!!URL::to('people/"+cellData+"')!!}";
                $(td).html(buttonsTable(show,edit,deleted,true));
            }
        }
        ]
    });
    
});
 </script>
@endsection