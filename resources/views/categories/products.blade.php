@php
/*
|--------------------------------------------------------------------------
| Sistema de Gerenciamento de Incidentes - SGI Versão 3.0
|--------------------------------------------------------------------------
| Autor: Roberto Pinheiro
| Arquivo: resources/views/categories/products.blade.php
| Camada: View
| Descrição: Exibe produtos por categoria
| Última atualização: 31/08/2019
*/
@endphp

@extends('layouts.app')

@section('title', $category->name)

@section('content')

        <div class="row">
            <div class="col-6">
                 <a href="{{ route('categories.index') }}" class="btn btn-primary text-right mb-3" role="button"  data-toggle="tooltip" data-placement="right" title="Lista de Categorias">
                     <i class="fa fa-columns" aria-hidden="true"></i>
                 </a>
            </div>
            <div style="font-size:18px;" class="col-6">
              <p class="text-right">Total de produtos: <span style="color: red;">{{ $total_products }}</span></p>
            </div>
        </div>

        @if($total_products==0)
          <h5 class="text-center">Não há produtos cadastrados nesta categoria!</h5>
        @else
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <th>Nome</th>
                  <th>Descrição resumida</th>
                  {{-- <th width="15%" class="text-center">Categoria</th> --}}
                  {{-- <th class="text-center">Cadastrado em</th> --}}
                  <th width="16%" class="text-center">Ações</th>
                </thead>

                <tbody>
                  <tr>
                    @foreach ($products as $product)
                    <td>{{$product->name}}</td>
                    <td>{{substr($product->description, 0, 100)}}...</td>
                    {{-- <td class="text-center">{{ $product->category->name }}</td> --}}
                    {{-- <td class="text-center">{{ date_format($product->created_at, "d/m/Y - H:i:s")  }}</td> --}}

                    <td class="text-center">
                        <a class="btn btn-success mt-2" href="{{route('products.show', $product->id)}}" role="button"  data-toggle="tooltip" data-placement="top" title="Exibir detalhes"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-warning mt-2" href="{{route('products.edit', $product->id)}}" role="button"  data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fa fa-pencil-square-o"></i></a>
                        <a class="btn btn-danger mt-2" href="{{route('products.destroy', $product->id)}}" onclick="return confirm('Tem certeza que deseja excluir o produto?')" role="button" data-toggle="tooltip" data-placement="top" title="Excluir"><i class="fa fa-trash-o"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
        @endif
@endsection

