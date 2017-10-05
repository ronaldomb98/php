


@extends('master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New Person</div>
                <div class="panel-body">

                    <form class="form-horizontal" id="fCreaPeople" data-route="{{route('people.store')}}" data-method="POST">
                        
                        {{ csrf_field() }}                        

                        
                        <div class="form-group">
					        <label for="name" class="col-md-4 control-label">Name</label>

					        <div class="col-md-6">
					            <input id="name" type="text" class="form-control" name="name" required autofocus>
					            <span class="msg-error hidden" id="err_name"></span>
					        </div>
					    </div>

					    <div class="form-group">
					        <label for="surname" class="col-md-4 control-label">Surname</label>

					        <div class="col-md-6">
					            <input id="surname" type="text" class="form-control" name="surname" required>
					            <span class="msg-error hidden" id="err_surname"></span>
					        </div>
					    </div>

					    <div class="form-group">
					        <label for="sex" class="col-md-4 control-label">Sex</label>

					        <div class="col-md-6">
					            <input id="sex" type="text" class="form-control" name="sex" required  >
					            <span class="msg-error hidden" id="err_sex"></span>
					        </div>
					    </div>

					    <div class="form-group">
					        <label for="birthday" class="col-md-4 control-label">birthday</label>

					        <div class="col-md-6">
					            <input id="birthday" type="text" class="form-control" name="birthday" required >
					            <span class="msg-error hidden" id="err_birthday"></span>
					        </div>
					    </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="button" id="BtnCreaPeople" class="btn btn-primary btnAjax" data-form="fCreaPeople">
                                    Create Person
                                </button>
                                <a href="{{route('people.index')}}">
                                    <button type="button" class="btn btn-info">Volver</button>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
