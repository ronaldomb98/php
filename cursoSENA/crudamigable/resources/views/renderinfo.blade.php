<div class="row">
    <div class="col-md-8 col-md-offset-1">
    <h1 class="text-center">Personas</h1>
    <hr>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>Es Amigable?</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datos as $persona)
                <tr>
                    <td>{{ $persona['id'] }}</td>
                    <td>{{ $persona['name'] }}</td>
                    <td>{{ $persona['surname'] }}</td>
                    <td>{{ $persona['years_old'] }}</td>
                    <td>
                        @if($persona['friendly'])
                            Si
                        @else
                            No
                        @endif
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
        <h2 class="text-right">Select</h2>
        <hr>
        <select class="selec" name="Seleccione una opcion">
          <option value="" selected disabled>Seleccione una opcion</option>
          </optgroup>
          <optgroup label="Seleccione">
            @foreach ($documentType as $key => $document)
              <option value="{{ $document['value'] }}">{{ $document['name'] }}</option>
            @endforeach
          </optgroup>
        </select>
    </div>
</div>
<hr>
