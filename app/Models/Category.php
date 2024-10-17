<?php

namespace App\Models;

class Category extends \TCG\Voyager\Models\Category
{
    public function childes()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function allChildes()
    {
        return collect($this->childes)->pluck('files')->flatten()->unique();
    }

    public function getAll($categories)
    {
        $append = collect();
        foreach ($categories as $category)
        {
            if ($category->childes->count())
            {
                $append->merge($category->childes);
            }
        }
        if ($append->count())
        {
            $append = $this->getAll($append);
        }
        return $categories->merge($append);
    }

    public static function backParent($category)
    {
        if ($category->parent_id == null) {
            return $category;
        } else {
            return Category::backParent($category->parent);
        }
    }
}
