@extends('layout')

@section('breadcrumb')
    {!! Breadcrumbs::render('create') !!}
@endsection
@section('content')
    <div class="col-md-8">
        <h2>
            Nuevo producto
            <a href="{{ route('products.index') }}" class="btn btn-default pull-right">
                Listado
            </a>
        </h2>

        @include('products.fragment.error')

        {!! Form::open(['route' => ['products.store']]) !!}
        @include('products.fragment.form')
        {!! Form::close() !!}
    </div>

    <div class="col-md-4">
        <div class="col-md-4">
            @include('products.fragment.aside')
        </div>
    </div>


@endsection