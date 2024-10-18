<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'noe_moamele','noe_melk', 'sen_bana','tabaghe', 'kol_vahed', 'otagh', 'sanad', 'kafpoosh', 'jahat', 'kabinet', 'hot',
        'emtiyza', 'mahal', 'slug', 'seo_title', 'meta_description', 'meta_keywords', 'image', 'video', 'address', 'status',
        'price', 'rahn', 'ejare', 'metr', 'metr_zamin', 'shekar', 'like', 'elvator', 'anbari', 'balkon', 'parking', 'farangi',
        'moaveze', 'bazsazi', 'cooler', 'water_hot',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function noe_moamele()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
}
