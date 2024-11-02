<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class File extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'sen_bana','tabaghe', 'kol_vahed', 'otagh', 'sanad', 'kafpoosh', 'jahat', 'kabinet', 'hot', 'emtiyza',
        'more', 'mahal', 'slug', 'seo_title', 'meta_description', 'meta_keywords', 'image', 'video', 'address',
        'status', 'price', 'rahn', 'ejare', 'metr', 'metr_zamin', 'shekar', 'like', 'elvator', 'anbari', 'balkon',
        'parking', 'farangi', 'moaveze', 'bazsazi', 'cooler', 'water_hot', 'user_id', 'category_id',
    ];

    protected $casts = [
        'emtiyza' => 'array',
    ];

    public function scopeField(Builder $query,string $fieldSlug)
    {
        dd($query->$fieldSlug);
    }

    public function scopeEmtiyza(Builder $query, array $emtiyza)
    {
        return Field::whereIn('id', $emtiyza)->get();
    }

    public function SenBana(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Field::class, 'sen_bana');
    }

    public function Waterhot(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Field::class, 'water_hot');
    }

    public function Cooler(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Field::class, 'cooler');
    }

    public function Mahal(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Field::class, 'mahal');
    }

    public function Hot(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Field::class, 'hot');
    }

    public function Kabinet(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Field::class, 'kabinet');
    }

    public function Jahat(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Field::class, 'jahat');
    }

    public function Kafpoosh(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Field::class, 'kafpoosh');
    }

    public function Sanad(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Field::class, 'sanad');
    }

    public function Otagh(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Field::class, 'otagh');
    }

    public function KolVahed(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Field::class, 'kol_vahed');
    }

    public function Tabaghe(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Field::class, 'tabaghe');
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
