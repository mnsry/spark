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

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
