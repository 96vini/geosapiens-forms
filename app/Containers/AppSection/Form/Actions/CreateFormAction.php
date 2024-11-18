<?php

namespace App\Containers\AppSection\Form\Actions;

use App\Containers\AppSection\Form\Tasks\CreateFormTask;
use Apiato\Core\Traits\HashIdTrait;
use App\Ship\Parents\Actions\Action as ParentAction;
use Carbon\Carbon;

class CreateFormAction extends ParentAction
{
    use HashIdTrait;

    public function __construct(
        private readonly CreateFormTask $createFormTask
    ) {}

    public function run(array $formData)
    {
        foreach ($formData['fields'] as $index => &$field) {

            $now = Carbon::now()->timestamp;
            $random = (string) mt_rand(1000, 9999);
            
            $field['id'] = $this->encode($now + $random);
        }

        try {
            $newFormData = $this->createFormTask->run($formData);

            return $newFormData;
        } catch (\Throwable $exception) {
            throw new \Exception('Error creating form: ' . $exception->getMessage(), $exception->getCode(), $exception);
        }
    }
}
