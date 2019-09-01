@php
/*
|--------------------------------------------------------------------------
| Teste Spot Promo - CRUD de produtos e categorias
|--------------------------------------------------------------------------
| Autor: Roberto Pinheiro
| Arquivo: resources/views/categories/create.blade.php
| Camada: View
| Descrição: Formulário para cadastrar uma categoria de produtos
| Última atualização: 30/08/2019
*/
@endphp

@extends('layouts.app')

@section('title','Cadastro de Categoria de Produtos')

@section('content')

		<div class="row">
			<div class="col-4 text-left">
	          	<div class="form-group">
		        	<a class="btn btn-primary mb-2" href="{{ route('categories.index' )}}" data-toggle="tooltip" data-placement="left" title="Lista de categoria de produtos"><i class="fa fa-home"></i></a>
				</div>
			</div>
			<div class="col-8 text-right">
				<p style="font-weight:bold">* Informação obrigatória</p>
			</div>
		</div>

		@if(count($errors) > 0)
			<div class="alert alert-danger alert-dismissible" role="alert">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<p style="font-weight: bold">Erros no preenchimento do formulário:</p>
					<ul>
						@foreach($errors->all() as $error)
							<li> {{$error}} </li>
						@endforeach
					</ul>
			</div>
		@endif

       {!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}

			<div class="form-group">
				{!! Form::label('name','Nome *', ['class' => 'font_label']) !!}
				{!! Form::text('name',null,['class' =>'form-control', 'placeholder' =>'Nome da categoria'])!!}
			</div>

			<div class="form-group">
				{!! Form::label('description','Descrição', ['class' => 'font_label']) !!}
				{!! Form::textarea('description',null,['class' =>'form-control', 'placeholder' =>'Descrição da categoria', 'rows' => '5'])!!}
			</div>

			<div class="form-group text-center mt-5">
				{!! Form::submit('Cadastrar', ['class' =>'btn btn-success btn-lg btn-block']) !!}
			</div>

		{!! Form::close() !!}
@endsection
