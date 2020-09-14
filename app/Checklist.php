<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{
    protected $table = 'checklists';

    public function equipment_model(){
        return $this->belongsTo(EquipmentModel::class);
    }

    public function employee(){
        return $this->belongsTo(Employee::class);
    }

    public function checklist_items(){
        return $this->hasMany(ChecklistItem::class);
    }

}
