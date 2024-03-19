<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    use HasFactory;
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function member(): HasMany
    {
        return $this->hasMany(Member::class);
    }
    public function subscribe(): BelongsTo
    {
        return $this->belongsTo(Subscribe::class);
    }
}
