<?php

/*
|--------------------------------------------------------------------------
| Teste Spot Promo - CRUD de produtos e categorias
|--------------------------------------------------------------------------
| Autor: Roberto Pinheiro
| Arquivo: app/Http/Controllers/CategoriesController.php
| Camada: Controller
| Descrição: Controlador, tipo resource, com as funções de CRUD das categorias de produtos
| Última atualização: 01/09/2019
*/

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use Session;
use Illuminate\Support\Facades\Artisan;

class CategoriesController extends Controller
{
    public function index()
    {
      $total_categories = count(Category::all());
      $categories = Category::orderBy('name', 'asc')->paginate(10);
      return view('categories.index', compact('categories', 'total_categories'));
    }

    public function create()
    {
      return view('categories.create');
    }

    public function store(CategoryRequest $request)
    {
        $category = Category::create($request->all());
        Session::flash('message','Categoria de produtos cadastrada com sucesso!');
        return redirect('/categories');
    }

    public function show($id)
    {
      $category = Category::find($id);
      if($category==null){
          return view('errors.unidentified_category');
      } else {
          return view('categories.show', compact('category'));
      }
    }

    public function edit($id)
    {
        $category = Category::find($id);
        if($category==null){
            return view('errors.unidentified_category');
        } else {
            return view('categories.edit', compact('category'));
        }
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->all());
        Session::flash('message','Categoria de produtos atualizada com sucesso!');
        return redirect('/categories');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        if($category==null){
            return view('errors.unidentified_category');
        } else {
            $category = Category::find($id);
            $category->delete();
            Session::flash('message','Categoria de produtos excluída com sucesso!');
            return redirect('/categories');
        }
    }

    public function list_products($id)
    {
       $category = Category::find($id);
        if($category==null){
            return view('errors.unidentified_category');
        } else {
           $category = Category::find($id);
           $products = $category->products->all();
           $total_products = count($products);

           return view('categories.products',compact('category', 'products', 'total_products'));
        }
    }

    public function category_remake(){
        $exitCode = Artisan::call('migrate:refresh', [
            '--force' => true,
        ]);
        $exitCode = Artisan::call('db:seed', [
            '--class' => 'CategoriesTableSeeder'
        ]);
        Session::flash('message','Categorias padrões recriadas com sucesso! Você já pode cadastrar produtos!');
        return redirect('/products/create');
    }

    public function seed_remake(){
        $exitCode = Artisan::call('migrate:refresh', [
            '--force' => true,
        ]);
        $exitCode = Artisan::call('db:seed', [
            '--class' => 'CategoriesTableSeeder'
        ]);
        $exitCode = Artisan::call('db:seed', [
            '--class' => 'ProductsTableSeeder'
        ]);
        Session::flash('message','Categorias e Produtos de testes recriados com sucesso! Você já pode cadastrar um novo produto!');
        return redirect('/products/create');
    }

}
