<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $table = 'requests';

    public function employee(){
        return $this->belongsTo(Employee::class);
    }

    public function request_criticality(){
        return $this->belongsTo(RequestCriticality::class);
    }

    public function request_status(){
        return $this->belongsTo(RequestStatus::class);
    }

    public function equipment(){
        return $this->belongsTo(Equipment::class);
    }

    public function plan(){
        return $this->belongsTo(Plan::class);
    }
}
