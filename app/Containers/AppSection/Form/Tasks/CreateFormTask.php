<?php

namespace App\Containers\AppSection\Form\Tasks;

use App\Containers\AppSection\Form\Data\Repositories\FormRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

class CreateFormTask extends ParentTask
{
    public function __construct(
       private readonly FormRepository $repository
    ){}

    public function run(array $formData)
    {
        return $this->repository->create($formData);
    }
}
