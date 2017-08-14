@extends('layout')
@section('breadcrumb')
    {!! Breadcrumbs::render('edit',$product) !!}
@endsection
@section('content')
    <div class="col-md-8">
        <h2>
            {{$product->name}}
            <a href="{{ route('products.index') }}" class="btn btn-default pull-right">
                Listado
            </a>
        </h2>

        @include('products.fragment.error')

        {!! Form::model($product, ['route' => ['products.update',$product->id], 'method' => 'PUT']) !!}
        @include('products.fragment.form')
        {!! Form::close() !!}
    </div>

    <div class="col-md-4">
        <div class="col-md-4">
            @include('products.fragment.aside')
        </div>
    </div>


@endsection