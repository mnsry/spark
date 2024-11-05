<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Field extends Model
{
    protected $perPage = 500;

    protected $fillable = ['slug', 'name'];

    public function parentId()
    {
        return $this->belongsTo(self::class);
    }

    public function childes()
    {
        return $this->hasMany(self::class, 'parent_id')->orderBy('order', 'ASC');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function files()
    {
        return $this->belongsToMany(File::class);
    }

    public function scopeParentNull($query)
    {
        return $query->whereNull('parent_id')->orderBy('order', 'ASC');
    }

    public function scopeParentNotNull($query)
    {
        return $query->whereNotNull('parent_id');
    }

    public function scopeEmtiyza(Builder $query, array $emtiyza)
    {
        $query->whereIn('id', $emtiyza);
    }

    public function scopeSelectCategory(Builder $query, array $select_category)
    {
        $query->where('categories', $select_category);
    }
}
