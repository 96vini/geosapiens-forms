<?php

namespace App\Containers\AppSection\Fill\Models;

use App\Containers\AppSection\Form\Models\Form;
use App\Ship\Parents\Models\Model as ParentModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Fill extends ParentModel
{
    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Fill';
    public $timestamps = false;
    protected $fillable = ['form_id', 'content'];

    protected $casts = [
        'content' => 'array',
    ];

    public function form(): BelongsTo
    {
        return $this->belongsTo(Form::class);
    }
}
