<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';

    public function checklists(){
        return $this->hasMany(Checklist::class);
    }

    public function user(){
        return $this->hasOne(User::class);
    }

    public function requests(){
        return $this->hasMany(Request::class);
    }

}
