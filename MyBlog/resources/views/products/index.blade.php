@extends('layout')

@section('breadcrumb')
    {!! Breadcrumbs::render('home') !!}
    @endsection

@section('content')
    <div class="col-md-8">
        <h2>
            Listado de Productos
            <a href="{{ route('products.create') }}" class="btn btn-primary pull-right">Nuevo</a>
        </h2>
        @include('products.fragment.info')
        <table class="table table-hover table-stripped">
            <thead>
            <tr>
                <th width="20px">ID</th>
                <th>Nombre del producto</th>
                <th colspan="3">&nbsp;</th>
            </tr>
            </thead>

            <tbody>
            @if(count($products)>0)
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>
                        <strong>{{$product->name}}</strong>
                        {{$product->short}}
                    </td>
                    <td>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-link">
                            Ver
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-link">
                            Editar
                        </a>
                    </td>
                    <td>
                        <form action="{{route('products.destroy', $product->id)}}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-link">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            @else
                <tr>
                    <td colspan="3">
                        <h4>No hay productos registrados</h4>
                    </td>
                </tr>
            @endif
            </tbody>


        </table>
        {!! $products->render() !!}
    </div>



    <div class="col-md-4">
        @include('products.fragment.aside')
    </div>


@endsection