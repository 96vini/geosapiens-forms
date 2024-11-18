<?php

namespace App\Containers\AppSection\Fill\UI\API\Controllers;

use App\Ship\Parents\Controllers\ApiController;
use App\Containers\AppSection\Fill\Actions\CreateFillAction;
use App\Containers\AppSection\Fill\UI\API\Requests\CreateFillRequest;
use App\Containers\AppSection\Fill\UI\API\Transformers\CreateFillTransformer;

class CreateFillController extends ApiController
{
    public function __construct(
        private readonly CreateFillAction $createFillAction
    ){}

    public function __invoke(CreateFillRequest $request) {
        $newFill = $this->createFillAction->run($request->validated());

        return $this->transform($newFill, CreateFillTransformer::class);
    }
}
