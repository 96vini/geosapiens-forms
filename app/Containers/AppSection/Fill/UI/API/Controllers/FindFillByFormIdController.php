<?php

namespace App\Containers\AppSection\Fill\UI\API\Controllers;

use App\Containers\AppSection\Fill\Actions\FindFillByFormIdAction;
use App\Containers\AppSection\Fill\UI\API\Requests\FindFillByFormIdRequest;
use App\Containers\AppSection\Fill\UI\API\Transformers\FindFillByFormIdTransformer;
use App\Ship\Parents\Controllers\ApiController;

class FindFillByFormIdController extends ApiController
{
    public function __construct(
        private readonly FindFillByFormIdAction $findFillByFormIdAction
    ){}
    
    public function __invoke(FindFillByFormIdRequest $request) {
        $requestValidated = $request->validated();

        $fill = $this->findFillByFormIdAction->run($requestValidated['form_id']);

        return $this->transform($fill, FindFillByFormIdTransformer::class);
    }
}
