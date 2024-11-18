<?php

namespace App\Containers\AppSection\Fill\Actions;

use App\Containers\AppSection\Fill\Tasks\FindFillByFormIdTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindFillByFormIdAction extends ParentAction
{
    public function __construct(
        private readonly FindFillByFormIdTask $findFillByFormIdTask
    ){}

    public function run(string $form_id)
    {
        return $this->findFillByFormIdTask->run($form_id);
    }
}
