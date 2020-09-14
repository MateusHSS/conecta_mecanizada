<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChecklistItem extends Model
{
    protected $table = 'checklist_items';

    public function section(){
        return $this->belongsTo(Section::class);
    }

    // public function checklists(){
    //     return $this->belongsToMany(Checklist::class);
    // }

    public function checklist_item_answer(){
        return $this->hasOne(ChecklistItemAnswer::class);
    }

    public function checklist_models(){
        return $this->belongsToMany(ChecklistModel::class);
    }
}
