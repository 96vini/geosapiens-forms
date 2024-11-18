<?php

namespace App\Containers\AppSection\Form\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class FormRepository extends ParentRepository
{
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
