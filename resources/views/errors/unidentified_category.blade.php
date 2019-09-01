@php
/*
|--------------------------------------------------------------------------
| Teste Spot Promo - CRUD de produtos e categorias
|--------------------------------------------------------------------------
| Autor: Roberto Pinheiro
| Arquivo: resources/views/errors/unidentified_category.blade.php
| Camada: View
| Descrição: Mensagem de erro - Categoria não encontrada (inexistente)
| Última atualização: 01/09/2019
*/
@endphp

@extends('layouts.app')

@section('title','Categoria inexistente!')

@section('content')
      <div class="text-center">
        <a class="btn btn-primary btn-lg" href="{{ route('categories.index') }}">Listar Categorias</a>
      </div>
@endsection
