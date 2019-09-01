<?php

/*
|--------------------------------------------------------------------------
| Teste Spot Promo - CRUD de produtos e categorias
|--------------------------------------------------------------------------
| Autor: Roberto Pinheiro
| Arquivo: app/Category.php
| Camada: Model
| Descrição: Permite criar queries com o Eloquent nas manipulações com
| a tabela de categorias (categories).
| Última atualização: 01/09/2019
*/

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $fillable = ['name', 'description'];

  // Relacionamento de 1 para muitos da tabela categories com a tabela products
  public function products(){
    return $this->hasMany('App\Product');
  }
}
