<?php

namespace App\Containers\AppSection\Fill\Actions;

use App\Containers\AppSection\Fill\Tasks\CreateFillTask;
use App\Containers\AppSection\Form\Tasks\CheckFormExistsTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateFillAction extends ParentAction
{
    public function __construct(
        private readonly CheckFormExistsTask $checkFormExistsTask,
        private readonly CreateFillTask $createFillTask
    ) {}
        
    public function run(array $dataFill)
    {
        $this->checkFormExistsTask->run($dataFill['form_id']);
        
        return $this->createFillTask->run($dataFill);
    }
}
