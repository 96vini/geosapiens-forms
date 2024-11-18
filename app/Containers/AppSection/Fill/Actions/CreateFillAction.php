<?php

namespace App\Containers\AppSection\Fill\Actions;

use App\Containers\AppSection\Fill\Tasks\CreateFillTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateFillAction extends ParentAction
{
    public function __construct(
        private readonly CreateFillTask $createFillTask
    ) {}
        
    public function run(array $dataFill)
    {
        return $this->createFillTask->run($dataFill);
    }
}
