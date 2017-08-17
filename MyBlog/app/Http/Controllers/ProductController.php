<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests\ProductRequest;
use \Eloquent;
class ProductController extends Controller
{
    public function index()
    {

        $products = Product::where('id','<','50')
            ->where('name','like','Qui%')
            ->orWhere('name','like','%a%')
            ->orderBy('id','DESC')
            ->paginate(10);

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(ProductRequest $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->short = $request->short;
        $product->body = $request->body;

        $product->save();
        return redirect()->route('products.index')
            ->with('info','El producto fue Guardado');
    }

    public function update(ProductRequest $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->short = $request->short;
        $product->body = $request->body;

        $product->save();
        return redirect()->route('products.index')
                        ->with('info','El producto '.$product->id.' fue Actualizado');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.editar',compact('product'));
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show',compact('product'));
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return back()->with('info','El producto '.$product->id.' fue eliminado');
    }
}
