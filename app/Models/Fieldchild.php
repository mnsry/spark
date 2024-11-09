<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Fieldchild extends Model
{
    protected $table = 'fieldchilds';
    protected $fillable = ['slug', 'name'];

    public function field()
    {
        return $this->belongsTo(Field::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class)->orderBy('order', 'ASC');
    }

    public function scopeOrderasc(Builder $query)
    {
        $query->orderBy('id', 'ASC');
    }
}
