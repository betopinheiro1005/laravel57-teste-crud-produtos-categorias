<?php

/*
|--------------------------------------------------------------------------
| Teste Spot Promo - CRUD de produtos e categorias
|--------------------------------------------------------------------------
| Autor: Roberto Pinheiro
| Arquivo: app/Http/Requests/CategoryRquest.php
| Categoria: Requests
| Descrição: Regras de validação para os formulários de categorias (de criação e edição)
| Última atualização: 01/09/2019
*/

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
          'name' => 'required|min:5|max:75',
        ];
    }
}
