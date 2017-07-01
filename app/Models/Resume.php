<?php

namespace App\Models;

use App\Models\BaseModel;

class Resume extends BaseModel
{
	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user()
    {
        return $this->belongsTo(User::class);
    }
}
