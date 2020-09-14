<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class RequestCriticality extends Model
{
    protected $table = 'request_criticalities';

    public function requests(){
        return $this->hasMany(Request::class);
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}
