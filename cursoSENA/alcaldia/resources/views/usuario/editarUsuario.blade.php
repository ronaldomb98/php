@extends('layouts.master')

@section('contenido')
<form class="form-horizontal" role="form" action="" id="fEditaUsuario">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="nombre" class="col-md-4 control-label">Nombre</label>

        <div class="col-md-6">
            <input id="nombre" type="text" class="form-control" name="nombre" required autofocus value="{{$u->name}}">
            <span class="msg-error hidden" id="err_nombre"></span>
        </div>
    </div>

    <div class="form-group">
        <label for="correo" class="col-md-4 control-label">Correo Electrónico</label>

        <div class="col-md-6">
            <input id="correo" type="email" class="form-control" name="email" required value="{{$u->email}}">
            <span class="msg-error hidden" id="err_correo"></span>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="button" class="btn btn-primary BtnAjax" data-ruta="{{ route('usuarios.update',$u->id) }}" data-form="fEditaUsuario" data-metodo="PUT">
                Actualizar
            </button>
        </div>
    </div>
</form>
@endsection