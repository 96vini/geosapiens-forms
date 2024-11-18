<?php

namespace App\Containers\AppSection\Form\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

class CreateFormRequest extends ParentRequest
{
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:50',
                'min:4',
            ],
            'fields' => [
                'required',
                'array',
            ],
            'fields.*.label' => [
                'required',
                'string',
                'max:50',
            ],
            'fields.*.type' => [
                'required',
                'in:TextField,SelectField,NumberField'
            ],
            'fields.*.options' => [
                'required_if:fields.*.type,SelectField',
                'array',
                'min:1',
            ],
            'fields.*.options.*' => [
                'required_if:fields.*.type,SelectField',
                'string',
                'min:2',
            ],
            'fields.*.required' => [
                'required',
                'boolean',
            ],
        ];
    }    
}
