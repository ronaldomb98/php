


@extends('master')

@section('content')
<form class="form-horizontal" role="form" data-route="{{ route('people.update',$u->id) }}" id="fEditaEstado" data-method="PUT">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="name" class="col-md-4 control-label">Name</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="name" required autofocus value="{{$u->name}}">
            <span class="msg-error hidden" id="err_name"></span>
        </div>
    </div>

    <div class="form-group">
        <label for="surname" class="col-md-4 control-label">Surname</label>

        <div class="col-md-6">
            <input id="surname" type="text" class="form-control" name="surname" required  value="{{$u->surname}}">
            <span class="msg-error hidden" id="err_surname"></span>
        </div>
    </div>

    <div class="form-group">
        <label for="sex" class="col-md-4 control-label">Sex</label>

        <div class="col-md-6">
            <input id="sex" type="text" class="form-control" name="sex" required  value="{{$u->sex}}">
            <span class="msg-error hidden" id="err_sex"></span>
        </div>
    </div>

    <div class="form-group">
        <label for="birthday" class="col-md-4 control-label">birthday</label>

        <div class="col-md-6">
            <input id="birthday" type="text" class="form-control" name="birthday" required  value="{{$u->birthday}}">
            <span class="msg-error hidden" id="err_birthday"></span>
        </div>
    </div>
    

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="button" class="btn btn-primary btnAjax" data-form="fEditaEstado">
                Actualizar
            </button>
            <a href="{{route('people.index')}}">
                <button type="button" class="btn btn-info">Volver</button>
            </a>
        </div>
    </div>
</form>
@endsection
