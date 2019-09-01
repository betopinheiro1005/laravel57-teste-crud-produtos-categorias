<?php

/*
|--------------------------------------------------------------------------
| Teste Spot Promo - CRUD de produtos e categorias
|--------------------------------------------------------------------------
| Autor: Roberto Pinheiro
| Arquivo: app/Http/Controllers/ProductsController.php
| Camada: Controller
| Descrição: Controlador, tipo resource, com as funções de CRUD de produtos
| Última atualização: 01/09/2019
*/

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Session;

class ProductsController extends Controller
{

    public function index(Category $categ=null)
    {
        if($categ==null){
            $total_products = count(Product::all());
            $products = Product::orderBy('id', 'desc')->paginate(10);
        } else {
            $total_products = count($categ->products);
            $products = $categ->products;
        }
        return view('products.index', compact('products', 'total_products'));
    }

    public function create()
    {
      $categorias = Category::pluck('name', 'id');
      return view('products.create', compact('categorias'));
    }

    public function store(ProductRequest $request)
    {
        $product = Product::create($request->all());
        Session::flash('message','Produto cadastrado com sucesso!');
        return redirect('/products');
    }

    public function show($id)
    {
      $product = Product::find($id);
      if($product==null){
          return view('errors.unidentified_product');
      } else {
        return view('products.show', compact('product'));
      }
    }

    public function edit($id)
    {
      $product = Product::find($id);
      if($product==null){
          return view('errors.unidentified_product');
      } else {
          $categorias = Category::pluck('name', 'id');
          return view('products.edit', compact('product', 'categorias'));
      }
    }

    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->all());
        Session::flash('message','Produto editado com sucesso!');
        return redirect('/products');
    }

    public function destroy(Product $product, $id)
    {
        $product = Product::find($id);
        if($product==null){
            return view('errors.unidentified_product');
        } else {
            $product->delete();
            Session::flash('message','Produto excluído com sucesso!');
            return redirect('/products');
        }
    }

}
