@php
/*
|--------------------------------------------------------------------------
| Teste Spot Promo - CRUD de produtos e categorias
|--------------------------------------------------------------------------
| Autor: Roberto Pinheiro
| Arquivo: resources/views/errors/unidentified_product.blade.php
| Camada: View
| Descrição: Mensagem de erro - Produto não encontrada (inexistente)
| Última atualização: 01/09/2019
*/
@endphp

@extends('layouts.app')

@section('title','Produto inexistente!')

@section('content')
      <div class="text-center">
        <a class="btn btn-primary btn-lg" href="{{ route('products.index') }}">Listar Produtos</a>
      </div>
@endsection
