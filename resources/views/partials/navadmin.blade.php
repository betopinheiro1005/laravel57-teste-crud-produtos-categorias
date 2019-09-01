@php
/*
|--------------------------------------------------------------------------
| Teste Spot Promo - CRUD de produtos e categorias
|--------------------------------------------------------------------------
| Autor: Roberto Pinheiro
| Arquivo: resources/views/partials/navadmin.blade.php
| Camada: View
| Descrição: Barra de navegação padrão no cabeçalho com links para
| listar e cadastrar produtos e categorias.
| Última atualização: 30/08/2019
*/
@endphp

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-2">

  <a class="navbar-brand logo_empresa" href="https://www.spotpromo.com.br/"><image src="{{ asset('/images/logo_spot_peq.png')}}" />
</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Produtos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('products.index') }}">Listar</a>
          <a class="dropdown-item" href="{{ route('products.create') }}">Cadastrar</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categorias
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('categories.index') }}">Listar</a>
          <a class="dropdown-item" href="{{ route('categories.create') }}">Cadastrar</a>
        </div>
      </li>
    </ul>
  </div>

<div style="float-right" class="logo_aplicativo">CRUD de Produtos e Categorias</div>

</nav>
