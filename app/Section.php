<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Section extends Model
{
    protected $table = 'sections';

    public function items(){
        return $this->hasMany(ChecklistItem::class);
    }
    
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}
