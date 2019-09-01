@php
/*
|--------------------------------------------------------------------------
| Teste Spot Promo - CRUD de produtos e categorias
|--------------------------------------------------------------------------
| Autor: Roberto Pinheiro
| Arquivo: resources/views/products/create.blade.php
| Camada: View
| Descrição: Formulário para cadastrar um produto
| Última atualização: 30/08/2019
*/
@endphp

@extends('layouts.app')

@section('title','Cadastro de Produto')

@section('content')

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

		@if(count($categorias)==0)
			<h5 class="text-center">Não há nenhuma categoria cadastrada!</h5>
			<h5 class="text-center">Para cadastrar um produto é necessário ter pelo menos uma categoria de produtos cadastrada!</h5>

			<div class="row">
				<div class="col-4">
					 <div class="form-group text-center mt-5">
						<a class="btn btn-outline-success btn-lg" href="{{route('categories.create')}}" role="button" data-toggle="tooltip" data-placement="bottom" title="Redireciona para o formulário de cadastro de categoria">Cadastrar categoria</a>
					 </div>
				</div>
				<div class="col-4">
					{!! Form::open(['route' => 'categories.remake', 'method' => 'POST']) !!}
						 <div class="form-group text-center mt-5">
					{!! Form::submit('Reconstruir Categorias', ['class' =>'btn btn-outline-primary btn-lg text-center', 'role' => 'button', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Reconstrói as categorias padrões de testes']) !!}
						 </div>
	 				{!! Form::close() !!}
				</div>
				<div class="col-4">
					{!! Form::open(['route' => 'seed.remake', 'method' => 'POST']) !!}
						 <div class="form-group text-center mt-5">
					{!! Form::submit('Reconstruir base de testes', ['class' =>'btn btn-outline-danger btn-lg text-center', 'role' => 'button', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Reconstrói toda a base de testes (categorias e produtos)']) !!}
						 </div>
	 				{!! Form::close() !!}
				</div>
			</div>


		@else
			{!! Form::open(['route' => 'products.store', 'method' => 'POST']) !!}
				 <div class="form-group">
					 {!! Form::label('name','Nome*', ['class' => 'font_label']) !!}
					 {!! Form::text('name',null,['class' =>'form-control', 'placeholder' =>'Nome do produto'])!!}
				 </div>

				 <div class="form-group">
					 {!! Form::label('code_prod','Código*', ['class' => 'font_label']) !!}
					 {!! Form::text('code_prod',null,['class' =>'form-control', 'placeholder' =>'Código do produto'])!!}
				 </div>

				 <div class="form-group">
					 {!! Form::label('description','Descrição*', ['class' => 'font_label']) !!}
					 {!! Form::textarea('description',null,['class' =>'form-control', 'placeholder' =>'Descrição do produto', 'rows' => '8'])!!}
				 </div>

				 <div class="form-group">
						 {!! Form::label('category_id','Categoria do produto*', ['class' => 'font_label']) !!}
						 {!! Form::select('category_id',$categorias,null,['class' =>'form-control', 'placeholder' => 'Selecione uma opção'])!!}
				 </div>

				 <div class="form-group text-center mt-5">
					 {!! Form::submit('Cadastrar', ['class' =>'btn btn-success btn-lg btn-block']) !!}
				 </div>
	 		{!! Form::close() !!}
		@endif

@endsection
