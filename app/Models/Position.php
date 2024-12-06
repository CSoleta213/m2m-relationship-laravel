<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Position extends Model
{
    public function sports(): BelongsToMany
    {
        return $this->belongsToMany(Sport::class);
    }
}
