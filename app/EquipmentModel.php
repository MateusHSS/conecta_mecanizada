<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EquipmentModel extends Model
{
    protected $table = 'equipment_models';

    // public function checklist(){
    //     return $this->hasOne(Checklist::class);
    // }

    public function checklist_model(){
        return $this->hasOne(ChecklistModel::class)
    }

    public function equipments(){
        return $this->hasMany(Equipment::class);
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
    
}
