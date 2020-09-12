<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $table = 'equipments';

    public function equipment_model(){
        return $this->belongsTo(EquipmentModel::class);
    }

    public function requests(){
        return $this->belongsToMany(Request::class);
    }
    
}
