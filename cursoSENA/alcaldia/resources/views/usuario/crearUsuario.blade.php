@extends('layouts.master')

@section('contenido')
	<form class="form-horizontal" role="form" action="" id="fCreaUsuario">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="nombre" class="col-md-4 control-label">Nombre</label>

            <div class="col-md-6">
                <input id="nombre" type="text" class="form-control" name="nombre" required autofocus>
                <span class="msg-error hidden" id="err_nombre"></span>
            </div>
        </div>

        <div class="form-group">
            <label for="correo" class="col-md-4 control-label">Correo Electrónico</label>

            <div class="col-md-6">
                <input id="correo" type="email" class="form-control" name="correo" required>
                <span class="msg-error hidden" id="err_correo"></span>
            </div>
        </div>

        <div class="form-group">
            <label for="contrasena" class="col-md-4 control-label">Contraseña</label>

            <div class="col-md-6">
                <input id="contrasena" type="password" class="form-control" name="contraseña" required>
            </div>
        </div>

        <div class="form-group">
            <label for="confirma_contrasena" class="col-md-4 control-label">Confirmar Contraseña</label>

            <div class="col-md-6">
                <input id="confirma_contrasena" type="password" class="form-control" name="confirma_contraseña" required>
                <span class="msg-error hidden" id="err_contraseña"></span>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="button" class="btn btn-primary BtnAjax" data-ruta="{{ route('usuarios.store') }}" data-form="fCreaUsuario" data-metodo="POST">
                    Crear Usuario
                </button>
            </div>
        </div>
    </form>
@endsection