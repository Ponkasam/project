<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    protected $table = 'reserves';
    protected $primaryKey = 'id';
    protected $fillable = [
        'subject_id','term','YML','stud_id'
    ];
    public function subject(){
        return $this->belongsTo('App\Subject', 'subject_id');
    }
 



}
