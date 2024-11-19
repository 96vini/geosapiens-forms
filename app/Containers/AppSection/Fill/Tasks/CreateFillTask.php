<?php

namespace App\Containers\AppSection\Fill\Tasks;

use App\Containers\AppSection\Fill\Data\Repositories\FillRepository;
use App\Containers\AppSection\Fill\Models\Fill;
use App\Containers\AppSection\Form\Models\Form;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class CreateFillTask extends ParentTask
{
    public function __construct(private readonly FillRepository $repository) {}

    public function run(array $dataFill): Fill | \Throwable
    {
        $form = Form::find($dataFill['form_id']);

        if (!$form) {
            throw new NotFoundException('Form not found');
        }

        try {
            $newFill = $this->repository->create($dataFill);

            return $newFill;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
