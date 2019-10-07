<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';
    protected $primaryKey ='id';
    protected $fillable = [
        'subject_id', 'subject_name', 'class_room', 'subject_time', 'term', 'sect', 'teacher', 'day_id'
    ];

    public function days(){
        return $this->belongsTo('App\Day','day_id');
    }
}
