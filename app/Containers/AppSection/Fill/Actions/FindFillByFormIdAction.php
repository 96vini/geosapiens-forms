<?php

namespace App\Containers\AppSection\Fill\Actions;

use App\Containers\AppSection\Fill\Tasks\FindFillByFormIdTask;
use App\Containers\AppSection\Form\Tasks\CheckFormExistsTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindFillByFormIdAction extends ParentAction
{
    public function __construct(
        private readonly CheckFormExistsTask $checkFormExistsTask,
        private readonly FindFillByFormIdTask $findFillByFormIdTask
    ){}

    public function run(string $form_id)
    {
        $this->checkFormExistsTask->run($form_id);
        
        return $this->findFillByFormIdTask->run($form_id);
    }
}
