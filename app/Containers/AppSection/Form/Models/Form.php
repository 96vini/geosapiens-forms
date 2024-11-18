<?php

namespace App\Containers\AppSection\Form\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class Form extends ParentModel
{
    /**
     * A resource key to be used in the serialized responses.
     */
    public $timestamps = false;
    protected string $resourceKey = 'Form';
    protected $fillable = ['name', 'fields'];

    protected $casts = [
        'fields' => 'array',
    ];
}
