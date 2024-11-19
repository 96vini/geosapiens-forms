<?php

namespace App\Containers\AppSection\Form\Tasks;

use App\Ship\Exceptions\NotFoundException;
use App\Containers\AppSection\Form\Data\Repositories\FormRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

class CheckFormExistsTask extends ParentTask
{
    public function __construct(
        private readonly FormRepository $formRepository
    ) {}

    public function run(string $form_id)
    {
        $form = $this->formRepository->findById($form_id)->first();

        if (!$form) {
            throw new NotFoundException('The form ID does not exist.');
        }
    }
}
