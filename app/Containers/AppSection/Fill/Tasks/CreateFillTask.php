<?php

namespace App\Containers\AppSection\Fill\Tasks;

use App\Containers\AppSection\Fill\Data\Repositories\FillRepository;
use App\Containers\AppSection\Fill\Models\Fill;
use App\Ship\Parents\Tasks\Task as ParentTask;

class CreateFillTask extends ParentTask
{
    public function __construct(private readonly FillRepository $repository) {}

    public function run(array $dataFill): Fill | \Throwable
    {
        try {
            $newFill = $this->repository->create($dataFill);

            return $newFill;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
