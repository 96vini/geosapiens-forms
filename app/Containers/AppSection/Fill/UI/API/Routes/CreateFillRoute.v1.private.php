<?php

/**
 * @apiGroup           Fill
 * @apiName            CreateFill
 *
 * @api                {POST} /v1/forms/:form_id/fills Create Fill
 * @apiDescription     Endpoint description here...
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated ['permissions' => '', 'roles' => '']
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 * @apiParam           {String} parameters here...
 *
 * @apiSuccessExample  {json} Success-Response:
 * HTTP/1.1 200 OK
 * {
 *	"data": {
 *	    "id": "39n0Z12OZGKERJgW",
 *		"form": {
 *			"id": 3,
 *			"name": "Form Test",
 *			"fields": [
 *				{
 *					"type": "SelectField",
 *					"label": "Field Test",
 *					"options": [
 *						"Teste 1"
 *					],
 *					"required": true
 *				}
 *			]
 *		},
 *		"content": {
 *			"Teste": "teste"
 *		}
 *	},
 *	"meta": {
 *		"include": [],
 *		"custom": []
 *	}
 * }
 */

use App\Containers\AppSection\Fill\UI\API\Controllers\CreateFillController;
use Illuminate\Support\Facades\Route;

Route::post('forms/{form_id}/fills', CreateFillController::class);

