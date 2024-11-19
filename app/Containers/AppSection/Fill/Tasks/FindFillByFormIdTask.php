<?php

namespace App\Containers\AppSection\Fill\Tasks;

use App\Containers\AppSection\Fill\Data\Repositories\FillRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class FindFillByFormIdTask extends ParentTask
{
    public function __construct(
        private readonly FillRepository $fillRepository
    ) {}

    public function run(string $form_id)
    {
        $fills = $this->fillRepository->findWhere(['form_id' => $form_id])->first();

        if(!$fills) throw new NotFoundException('Fills not found');

        return $fills;
    }
}
