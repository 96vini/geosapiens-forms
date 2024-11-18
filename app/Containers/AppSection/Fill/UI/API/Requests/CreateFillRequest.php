<?php

namespace App\Containers\AppSection\Fill\UI\API\Requests;

use App\Containers\AppSection\Form\Data\Repositories\FormRepository;
use App\Ship\Parents\Requests\Request as ParentRequest;

class CreateFillRequest extends ParentRequest
{
    public function __construct(
        private readonly FormRepository $formRepository
    ){}

    protected array $decode = [
        'form_id',
    ];

    protected array $urlParameters = [
        'form_id',
    ];

    public function rules(): array
    {
        $formId = $this->route('form_id');
        $formIdDecoded = $this->decode($formId);

        $form = $this->formRepository
            ->findWhere(['id' => $formIdDecoded])
            ->first();

        if (!$form) {
            abort(404, 'Form not found.');
        }

        $fields = is_string($form['fields']) ? json_decode($form['fields'], true) : $form['fields'];

        if (!is_array($fields)) {
            abort(422, 'Invalid fields format.');
        }

        $rules = [
            'form_id' => 'required|exists:forms,id',
            'content' => 'required|array',
        ];

        foreach ($fields as $field) {
            $rules["content.".$field['id']] = 
                $field['required'] ?? false ? 'required' : 'nullable';
            
            if(isset($field['type']) && $field['type'] === 'SelectField') {
                $options = implode(',',$field['options']);
                $rules["content.".$field['id']] = "in:$options";
            }
        }

        return $rules;
    }
}
