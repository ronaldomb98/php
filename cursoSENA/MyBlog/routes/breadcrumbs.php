<?php



Breadcrumbs::register('home', function ($breadcrumbs)
{
    $breadcrumbs->push('Ronaldo CRUD',route('products.index'));
});

Breadcrumbs::register('show', function ($breadcrumbs, $product)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push($product->name,route('products.show', $product->id));
});

Breadcrumbs::register('create',function ($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Crear Producto',route('products.create'));
});

Breadcrumbs::register('edit', function ($breadcrumbs, $product)
{
    $breadcrumbs->parent('show', $product);
    $breadcrumbs->push('Editar',route('products.edit', $product->id));
});