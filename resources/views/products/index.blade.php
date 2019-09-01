@php
/*
|--------------------------------------------------------------------------
| Teste Spot Promo - CRUD de produtos e categorias
|--------------------------------------------------------------------------
| Autor: Roberto Pinheiro
| Arquivo: resources/views/products/index.blade.php
| Camada: View
| Descrição: Exibe uma tabela responsiva com a listagem dos produtos
| Última atualização: 30/08/2019
*/
@endphp

@extends('layouts.app')

@section('title', 'Lista de Produtos')

@section('content')

  <div class="row">
    <div class="col-8"></div>
    <div class="col-4 text-right">
          <a class="btn btn-primary mb-4 mr-1" href="{{ route('products.create' )}}" data-toggle="tooltip" data-placement="left" title="Cadastrar produto">Cadastrar</i></a>
    </div>
  </div>

  @if(Session::has('message'))
    <div class="row">
      <div class="col-12">
        <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          {{Session::get('message')}}
        </div>
      </div>
    </div>
  @endif

  <div class="table-responsive">
    @if( $total_products==0)
      <hr>
      <h4 class="text-center text-danger">Nenhum produto cadastrado!</h4>
      <hr>
    @else
      <table class="table table-striped">
        <thead>
          {{-- <th>Id</th> --}}
          <th>Nome</th>
          <th>Código</th>
          <th>Descrição resumida</th>
          <th>Categoria</th>
          <th width="180px">Ações</th>
        </thead>

        <tbody>
          <tr>
            @foreach ($products as $product)
            {{-- <td>{{$product->id}}</td> --}}
            <td>{{$product->name}}</td>
            <td>{{$product->code_prod}}</td>
            <td style="text-align: justify">{{substr($product->description, 0, 120)}}...</td>
            <td>{{$product->category->name}}</td>
            <td>
              <a class="btn btn-success mr-1 mb-1" href="{{route('products.show', $product->id)}}" role="button"  data-toggle="tooltip" data-placement="top" title="Exibir detalhes do produto"><i class="fa fa-eye"></i></a>
              <a class="btn btn-warning mr-1 mb-1" href="{{route('products.edit', $product->id)}}" role="button"  data-toggle="tooltip" data-placement="bottom" title="Editar produto"><i class="fa fa-pencil-square-o"></i></a>
              <a class="btn btn-danger mr-1 mb-1" href="{{route('products.destroy', $product->id)}}" onclick="return confirm('Tem certeza que deseja excluir o produto?')" role="button" data-toggle="tooltip" data-placement="top" title="Excluir produto"><i class="fa fa-trash-o"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

    @endif

    <br>

    <div class="row">
      <div class="col-md-8 col-lg-6">
        {!! $products->render() !!}
      </div>
      <div class="col-xm-12 col-md-4 col-lg-6">
        <p style="font-size: 18px; float: right; margin-right: 10px">Total de produtos: <span style="color: red;">{{ $total_products }}</span> </p>
      </div>
    </div>

  </div>

@endsection
