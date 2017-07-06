<?php

namespace App\Http\ApiControllers;

use App\Http\ApiControllers\ApiController;
use App\Models\CharacterType;
use App\Transformers\CharacterTypeTransformer;
use App\Http\Requests\Api\ApiRequest as Request;

class CharacterTypeController extends ApiController
{

	public function show(Request $request)
	{
		$characterType = CharacterType::where('id' ,$request->id)->firstOrFail();

		return $this->response->item($characterType, new CharacterTypeTransformer());
	}

}
