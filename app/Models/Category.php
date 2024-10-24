<?php

namespace App\Models;

class Category extends \TCG\Voyager\Models\Category
{
    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function childes()
    {
        return $this->hasMany(self::class, 'parent_id')->orderBy('order', 'ASC');
    }

    public function fields()
    {
        return $this->belongsToMany(Field::class)->orderBy('order', 'ASC');
    }

    public function allChildes()
    {
        return collect($this->childes)->pluck('files')->flatten()->unique();
    }

    public function scopeParentNull($query)
    {
        return $query->whereNull('parent_id')->orderBy('order', 'ASC');
    }

    public function scopeParentNotNull($query)
    {
        return $query->whereNotNull('parent_id');
    }
}
