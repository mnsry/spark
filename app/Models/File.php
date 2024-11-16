<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'category_id', 'mahale', 'mahalekharid', 'address', 'sanad', 'jahat', 'senbana', 'kolvahed',
        'vahed', 'tabaghat', 'tabaghe', 'tabaghatbeyn', 'parking', 'anbari', 'elvator', 'metrajzamin', 'metrajmaskoni',
        'metrajtejari', 'metrajmohavate', 'metrajmohavatebeyn', 'metrajbanabeyn', 'metrajbeyn', 'metrajhashiye',
        'metraj', 'metrajbana', 'metrajbalkon', 'metrajhayat', 'otagh', 'ashpazkhane', 'emtiazat', 'emtiazatbagh',
        'abouteemtiazat', 'nama', 'darb', 'kafposh', 'divar', 'divarsanati', 'saghf', 'loster', 'hammam', 'tovalet',
        'dastshor', 'zarfiyattedad', 'zarfiyat', 'zarfiyatmazad', 'abgarm', 'garmayesh', 'sarmayesh', 'estakhr',
        'sonajacozi', 'alachigh', 'gasromizi', 'takht', 'moble', 'tv', 'yakhchal', 'pokhtopaz', 'priceadi',
        'priceendhafte', 'pricetatilat', 'pricenafar', 'price', 'pricerahnaz', 'priceejareaz', 'pricerahnta',
        'priceejareta', 'priceasl', 'pricebarahn', 'priceejarebeyn', 'takhleyeday', 'takhleyemonth', 'van', 'komoddivari', 'kabinet',
        'shoghl', 'aboute', 'image', 'imagemulti', 'video', 'sabeghe', 'sabegheaz', 'mojavez', 'shekar', 'ajnas',
        'pricemoaveze', 'like', 'moavezeba', 'mahalemoaveze', 'status',
    ];

    protected $casts = [
        'mahalekharid' => 'array', 'tabaghatbeyn' => 'array', 'metrajmohavatebeyn' => 'array',
        'metrajbanabeyn' => 'array', 'metrajbeyn' => 'array', 'emtiazat' => 'array', 'emtiazatbagh' => 'array',
        'priceejarebeyn' => 'array', 'sabegheaz' => 'array', 'mahalemoaveze' => 'array', 'sarmayesh' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function mahale()
    {
        return $this->belongsTo(Fieldchild::class, 'mahale');
    }

    public function scopeMahalekharid(Builder $query, array $mahalekharid)
    {
        return Fieldchild::whereIn('id', $mahalekharid)->get();
    }

    public function scopeTabaghatbeyn(Builder $query, array $tabaghatbeyn)
    {
        return Fieldchild::whereIn('id', $tabaghatbeyn)->get();
    }

    public function scopeMetrajmohavatebeyn(Builder $query, array $metrajmohavatebeyn)
    {
        return Fieldchild::whereIn('id', $metrajmohavatebeyn)->get();
    }

    public function scopeMetrajbanabeyn(Builder $query, array $metrajbanabeyn)
    {
        return Fieldchild::whereIn('id', $metrajbanabeyn)->get();
    }

    public function scopeMetrajbeyn(Builder $query, array $metrajbeyn)
    {
        return Fieldchild::whereIn('id', $metrajbeyn)->get();
    }

    public function scopeEmtiazat(Builder $query, array $emtiazat)
    {
        return Fieldchild::whereIn('id', $emtiazat)->get();
    }

    public function scopeEmtiazatbagh(Builder $query, array $emtiazatbagh)
    {
        return Fieldchild::whereIn('id', $emtiazatbagh)->get();
    }

    public function scopePriceejarebeyn(Builder $query, array $priceejarebeyn)
    {
        return Fieldchild::whereIn('id', $priceejarebeyn)->get();
    }

    public function scopeSabegheazd(Builder $query, array $sabegheaz)
    {
        return Fieldchild::whereIn('id', $sabegheaz)->get();
    }

    public function scopeMahalemoaveze(Builder $query, array $mahalemoaveze)
    {
        return Fieldchild::whereIn('id', $mahalemoaveze)->get();
    }
}
