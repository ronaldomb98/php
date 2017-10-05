<div class="row">
    <div class="form-group">
        <label for="name" class="col-md-4 control-label">Nombre</label>
        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="name" required autofocus value="{{$u->name}}">
        </div>
    </div>
    <div class="form-group">
        <label for="surname" class="col-md-4 control-label">Surname</label>
        <div class="col-md-6">
            <input id="surname" type="text" class="form-control" name="surname" required autofocus value="{{$u->surname}}">
        </div>
    </div>
    <div class="form-group">
        <label for="sex" class="col-md-4 control-label">Sex</label>
        <div class="col-md-6">
            <input id="sex" type="text" class="form-control" name="sex" required autofocus value="{{$u->sex}}">
        </div>
    </div>
    <div class="form-group">
        <label for="birthday" class="col-md-4 control-label">Sex</label>
        <div class="col-md-6">
            <input id="birthday" type="text" class="form-control" name="birthday" required autofocus value="{{$u->birthday}}">
        </div>
    </div>

</div>