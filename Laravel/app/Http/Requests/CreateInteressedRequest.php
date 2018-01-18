<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateInteressedRequest extends Request
{
    /**
     * Determinar se o usuário está autorizado a fazer este pedido.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Obter as regras de validação que se aplicam ao pedido
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'phone'=> 'required',
            'email'=> 'required',
        ];

    }
}
