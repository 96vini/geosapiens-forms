<?php

namespace App\Containers\AppSection\Fill\UI\API\Transformers;

use App\Containers\AppSection\Fill\Models\Fill;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class CreateFillTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(Fill $fill): array
    {
        return [
            'id' => $fill->getHashedKey(),
            'form' => $fill->form,
            'content' => $fill->content
        ];
    }
}
