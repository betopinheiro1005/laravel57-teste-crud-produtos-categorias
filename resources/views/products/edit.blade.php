@php
/*
|--------------------------------------------------------------------------
| Teste Spot Promo - CRUD de produtos e categorias
|--------------------------------------------------------------------------
| Autor: Roberto Pinheiro
| Arquivo: resources/views/products/edit.blade.php
| Camada: View
| Descrição: Formulário para editar um produto
| Última atualização: 30/08/2019
*/
@endphp

@extends('layouts.app')

@section('title', 'Edição de Produto')

@section('content')

        @if(count($errors) > 0)
            <div class="alert alert-danger alert-dismissible ml-2 mr-2 mt-2" role="alert">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <p style="font-weight: bold">Erros no preenchimento do formulário:</p>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li> {{$error}} </li>
                        @endforeach
                    </ul>
            </div>
        @endif

        <div class="row">
  			<div class="col-4 text-left">
  	          	<div class="form-group">
  		        	<a class="btn btn-primary mb-2" href="{{ route('products.index' )}}" data-toggle="tooltip" data-placement="left" title="Lista de produtos"><i class="fa fa-home"></i></a>
  				</div>
  			</div>
  			<div class="col-8 text-right">
  				<p style="font-weight:bold">* Informação obrigatória</p>
  			</div>
   		</div>

        {!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT']) !!}

            <div class="form-group">
                {{ Form::label('name', 'Nome*', ['class' => 'font_label']) }}
                {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nome do produto']) }}
            </div>

            <div class="form-group">
                {{ Form::label('code_prod', 'Código*', ['class' => 'font_label']) }}
                {{ Form::text('code_prod', null, ['class' => 'form-control', 'placeholder' => 'Código do produto']) }}
            </div>

            <div class="form-group">
                {{ Form::label('description', 'Descrição*', ['class' => 'font_label']) }}
                {!! Form::textarea('description', null, ['class' =>'form-control', 'placeholder' =>'Descrição do produto', 'rows' => '8'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('category_id','Categoria de produto*', ['class' => 'font_label']) !!}
                {!! Form::select('category_id',$categorias,null,['class' =>'form-control', 'placeholder' => 'Selecione uma opção'])!!}
            </div>

            <br>

            <div class="form-group text-center">
                {{ Form::submit('Editar', ['class' => 'btn btn-success btn-lg btn-block']) }}
            </div>
        {!! Form::close() !!}
@endsection
