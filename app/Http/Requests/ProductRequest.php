<?php

/*
|--------------------------------------------------------------------------
| Teste Spot Promo - CRUD de produtos e categorias
|--------------------------------------------------------------------------
| Autor: Roberto Pinheiro
| Arquivo: app/Http/Requests/ProductRquest.php
| Categoria: Requests
| Descrição: Regras de validação para os formulários de produtos (de criação e edição)
| Última atualização: 01/09/2019
*/

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
          'name'          => 'required|min:5|max:140',
          'code_prod'     => 'required|min:3|max:12',
          'description'   => 'required|min:8',
          'category_id'   => 'required'
        ];
    }
}
