@php
/*
|--------------------------------------------------------------------------
| Teste Spot Promo - CRUD de produtos e categorias
|--------------------------------------------------------------------------
| Autor: Roberto Pinheiro
| Arquivo: resources/views/categories/index.blade.php
| Camada: View
| Descrição: Exibe uma tabela responsiva com a listagem das categorias de produtos
| Última atualização: 30/08/2019
*/
@endphp

@extends('layouts.app')

@section('title', 'Categorias de Produtos')

@section('content')

  <div class="row">
    <div class="col-8"></div>
    <div class="col-4 text-right">
          <a class="btn btn-primary mb-4 mr-1" href="{{ route('categories.create' )}}" data-toggle="tooltip" data-placement="left" title="Cadastrar categoria">Cadastrar</i></a>
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
    @if( $total_categories==0)
      <hr>
      <h4 class="text-center text-danger">Nenhuma categoria cadastrada!</h4>
      <hr>
    @else
      <table class="table table-striped">
        <thead>
          {{-- <th>Id</th> --}}
          <th>Nome</th>
          <th>Descrição</th>
          <th width="220px">Ações</th>
        </thead>

        <tbody>
          <tr>
            @foreach ($categories as $category)
            {{-- <td>{{$category->id}}</td> --}}
            <td>{{$category->name}}</td>
            <td>
              @if($category->description==null)
                Sem descrição
              @else
                {{substr($category->description, 0, 200)}}...
              @endif
            </td>
            <td>
              <a class="btn btn-success mr-1 mb-1" href="{{route('categories.show', $category->id)}}" role="button"  data-toggle="tooltip" data-placement="top" title="Exibir detalhes do produto"><i class="fa fa-eye"></i></a>
              <a class="btn btn-info mr-1 mb-1" href="{{route('categories.products', $category->id)}}" role="button"  data-toggle="tooltip" data-placement="bottom" title="Produtos cadastrados"><i class="fa fa-check-square-o" aria-hidden="true"></i></a>
              <a class="btn btn-warning mr-1 mb-1" href="{{route('categories.edit', $category->id)}}" role="button"  data-toggle="tooltip" data-placement="bottom" title="Editar produto"><i class="fa fa-pencil-square-o"></i></a>
              <a class="btn btn-danger mr-1 mb-1" href="{{route('categories.destroy', $category->id)}}" onclick="return confirm('Tem certeza que deseja excluir a categoria?\n Se confirmar, todos os produtos dela também serão excluídos!')" role="button" data-toggle="tooltip" data-placement="top" title="Excluir categoria"><i class="fa fa-trash-o"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    @endif

    <div class="row">
      <div class="col-md-8 col-lg-6">
        {!! $categories->render() !!}
      </div>
      <div class="col-xm-12 col-md-4 col-lg-6">
        <p style="font-size: 18px; float: right; margin-right: 10px">Total de categorias: <span style="color: red;">{{ $total_categories }}</span> </p>
      </div>
    </div>

  </div>

@endsection
