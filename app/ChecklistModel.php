<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChecklistModel extends Model
{
    protected $table = 'checklist_models';

    public function equipment_model(){
        return $this->belongsTo(EquipmentModel::class);
    }

    public function checklist_items(){
        return $this->hasMany(ChecklistItem::class);
    }
}
