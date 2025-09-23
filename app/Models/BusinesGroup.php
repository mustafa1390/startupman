<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BusinesGroup extends Model
{
     protected $fillable = ['name', 'icon', 'parent_id'];

    // Parent category
    public function parent(): BelongsTo
    {
        return $this->belongsTo(BusinesGroup::class, 'parent_id');
    }

    // Child categories
    public function children(): HasMany
    {
        return $this->hasMany(BusinesGroup::class, 'parent_id');
    }

    // Recursive children (for unlimited depth)
    public function childrenRecursive(): HasMany
    {
        return $this->children()->with('childrenRecursive');
    }
}
