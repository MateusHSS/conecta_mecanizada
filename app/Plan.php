<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = 'plans';

    public function checklist_item_answer(){
        return $this->hasMany(ChecklistItemAnswer::class);
    }

    public function requests(){
        return $this->hasMany(Request::class);
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
    
}
