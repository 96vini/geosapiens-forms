<?php

namespace App\Containers\AppSection\Form\UI\API\Controllers;

use App\Ship\Parents\Controllers\ApiController;
use App\Containers\AppSection\Form\Actions\CreateFormAction;
use App\Containers\AppSection\Form\UI\API\Requests\CreateFormRequest;
use App\Containers\AppSection\Form\UI\API\Transformers\CreateFormTransformer;

class CreateFormController extends ApiController
{
    public function __construct(
        private readonly CreateFormAction $createFormAction
    ) {}

    public function __invoke(CreateFormRequest $request) {
        $formData = $this->createFormAction->run($request->validated());
        
        return $this->transform($formData, CreateFormTransformer::class);
    }
}
