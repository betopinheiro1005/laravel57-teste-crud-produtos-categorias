@php
/*
|--------------------------------------------------------------------------
| Teste Spot Promo - CRUD de produtos e categorias
|--------------------------------------------------------------------------
| Autor: Roberto Pinheiro
| Arquivo: resources/views/categories/show.blade.php
| Camada: View
| Descrição: Exibe detalhes de uma categoria de produtos
| Última atualização: 30/08/2019
*/
@endphp

@extends('layouts.app')

@section('title', 'Detalhes da Categoria')

@section('content')

    <div class="row">
        <div class="col-12 text-right">
          <a class="btn btn-primary mb-2" href="{{ route('categories.index' )}}" data-toggle="tooltip" data-placement="left" title="Lista de categorias"><i class="fa fa-home"></i></a>
        </div>
    </div>

    <p><strong>Id: </strong> {{ $category->id }}</p>
    <p><strong>Nome: </strong> {{ $category->name }}</p>

    @if($category->description==null)
      <p class="text-justify"><strong>Descrição: </strong> Sem descrição</p>
    @else
      <p class="text-justify"><strong>Descrição: </strong> {{ $category->description }}</p>
    @endif

    @php
        $data_created =  $category->created_at;
        $data_updated = $category->updated_at;
    @endphp

    <p><strong>Data de cadastro: </strong> <?php echo date_format($data_created, "d/m/Y - H:i:s") ?></p>

    @if($data_updated != $data_created)
      <p><strong>Data da última atualização: </strong> <?php echo  date_format($data_updated, "d/m/Y - H:i:s") ?></p>
    @endif

@endsection
