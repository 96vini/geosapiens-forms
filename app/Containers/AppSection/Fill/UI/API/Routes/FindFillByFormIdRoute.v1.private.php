<?php

/**
 * @apiGroup           Fill
 * @apiName            FindFillByFormId
 *
 * @api                {GET} /v1/forms/:form_id/fills Find Fill By Form Id
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
 * 	"data": {
 * 		"id": "AvgPq4zr3Gb07ykZ",
 *		"form": {
 *			"id": 20,
 *			"name": "Formulário Teste2",
 *			"fields": [
 *				{
 *					"id": "OxlpzRWkMjZjGrX3",
 *					"type": "TextField",
 *					"label": "Nome Completo",
 *					"required": true
 *				},
 *				{
 *					"id": "7JAN2ddEMgYq2nav",
 *					"type": "SelectField",
 *					"label": "Gênero",
 *					"options": [
 *						"MASC",
 *						"FEM"
 *					],
 *					"required": false
 *				}
 *			]
 *		},
 * 		"content": {
 * 			"OxlpzRWkMjZjGrX3": "Teste",
 *			"7JAN2ddEMgYq2nav": "MASC"
 *		}
 *	},
 *	"meta": {
 *		"include": [],
 *		"custom": []
 *	}
 * }
 */

use App\Containers\AppSection\Fill\UI\API\Controllers\FindFillByFormIdController;
use Illuminate\Support\Facades\Route;

Route::get('forms/{form_id}/fills', FindFillByFormIdController::class);
