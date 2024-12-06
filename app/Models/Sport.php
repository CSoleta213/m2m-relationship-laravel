<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Sport extends Model
{
    public function positions(): BelongsToMany
    {
        return $this->belongsToMany(Position::class);
    }
}
