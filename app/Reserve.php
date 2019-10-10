<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    protected $table = 'reserves';
    protected $primaryKey = 'id';
    protected $fillable = [
        'subject_id','term','YML','stud_id','status_re'
    ];

    public function revers(){
        return $this->belongsTo('App\Subject','subject_id');
    }
}
