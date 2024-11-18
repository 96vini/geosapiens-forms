<?php

namespace App\Containers\AppSection\Fill\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class FillRepository extends ParentRepository
{
    protected $fieldSearchable = [
        'id' => '=',
    ];
}
