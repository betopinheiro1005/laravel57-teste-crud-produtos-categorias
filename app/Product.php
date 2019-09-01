<?php

/*
|--------------------------------------------------------------------------
| Teste Spot Promo - CRUD de produtos e categorias
|--------------------------------------------------------------------------
| Autor: Roberto Pinheiro
| Arquivo: app/Product.php
| Camada: Model
| Descrição: Permite criar queries com o Eloquent nas manipulações com
| a tabela de produtos (products).
| Última atualização: 01/09/2019
*/

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

  protected $fillable = ['name','code_prod','description','category_id'];

  // Um produto pertence a uma categoria
  public function category()
  {
    return $this->belongsTo('App\Category');
  }
}
