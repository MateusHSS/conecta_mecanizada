<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChecklistItemAnswer extends Model
{
    protected $table = 'checklist_item_answers';

    public function checklist(){
        return $this->belongsTo(Checklist::class);
    }

    public function checklist_item(){
        return $this->belongsTo(ChecklistItem::class);
    }

    public function plan(){
        return $this->belongsTo(Plan::class);
    }
}
