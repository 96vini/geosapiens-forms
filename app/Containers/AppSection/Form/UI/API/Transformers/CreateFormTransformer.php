<?php

namespace App\Containers\AppSection\Form\UI\API\Transformers;

use App\Containers\AppSection\Form\Models\Form;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class CreateFormTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(Form $form): array
    {
        return [
            'id' => $form->getHashedKey(),
            'name' => $form->name,
            'fields' => $form->fields
        ];
    }
}
