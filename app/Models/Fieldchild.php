<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fieldchild extends Model
{
    protected $fillable = ['slug', 'name'];

    public function field()
    {
        return $this->belongsTo(Field::class);
    }

}
