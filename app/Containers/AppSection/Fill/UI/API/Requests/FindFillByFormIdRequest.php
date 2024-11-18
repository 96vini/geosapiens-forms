<?php

namespace App\Containers\AppSection\Fill\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

class FindFillByFormIdRequest extends ParentRequest
{
    protected array $decode = [
        'form_id',
    ];

    protected array $urlParameters = [
        'form_id',
    ];

    public function rules(): array
    {
        return [
            'form_id' => 'required',
        ];
    }
}
