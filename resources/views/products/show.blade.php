@php
/*
|--------------------------------------------------------------------------
| Teste Spot Promo - CRUD de produtos e categorias
|--------------------------------------------------------------------------
| Autor: Roberto Pinheiro
| Arquivo: resources/views/products/show.blade.php
| Camada: View
| Descrição: Exibe detalhes de um produto
| Última atualização: 30/08/2019
*/
@endphp

@extends('layouts.app')

@section('title', 'Detalhes do Produto')

@section('content')

        <div class="row">
            <div class="col-12 text-right">
              <a class="btn btn-primary mb-2" href="{{ route('products.index' )}}" data-toggle="tooltip" data-placement="left" title="Lista de produtos"><i class="fa fa-home"></i></a>
            </div>
        </div>

        <p><strong>Id: </strong> {{ $product->id }}</p>
        <p><strong>Nome: </strong> {{ $product->name }}</p>
        <p><strong>Código do produto: </strong> {{ $product->code_prod }}</p>
        <p class="text-justify"><strong>Descrição: </strong> {{ $product->description }}</p>

        <p><strong>Categoria:</strong>
            {{ $product->category->name }}
        </p>

        @php
            $data_created =  $product->created_at;
            $data_updated = $product->updated_at;
        @endphp

        <p><strong>Data de cadastro: </strong> <?php echo date_format($data_created, "d/m/Y - H:i:s") ?></p>

        @if($data_updated != $data_created)
          <p><strong>Data da última atualização: </strong> <?php echo  date_format($data_updated, "d/m/Y - H:i:s") ?></p>
        @endif

@endsection
