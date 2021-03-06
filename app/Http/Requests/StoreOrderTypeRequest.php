<?php

namespace App\Http\Requests;

use App\Models\OrderType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreOrderTypeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('order_type_create');
    }

    public function rules()
    {
        return [
            'type'      => [
                'string',
                'required',
            ],
            'in_enable' => [
                'string',
                'required',
            ],
        ];
    }
}
