<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'name'];

    public function parentId()
    {
        return $this->belongsTo(self::class);
    }

    public function parent_items()
    {
        return $this->hasMany(self::class)->whereNull('parent_id');
    }

    public function childes()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function scopeActive($query)
    {
        return $query->whereNotNull('parent_id');
    }

    public function scopeParentNull($query)
    {
        return $query->whereNull('parent_id');
    }
}
