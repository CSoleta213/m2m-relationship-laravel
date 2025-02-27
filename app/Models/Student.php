<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function classes(): BelongsToMany
    {
        return $this->belongsToMany(ClassModel::class, 'class_student');
    }
}
