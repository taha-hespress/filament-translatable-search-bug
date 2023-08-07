<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class Patient extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['name'];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(Owner::class);
    }

    public function treatements(): HasMany
    {
        return $this->hasMany(Treatment::class);
    }
}
