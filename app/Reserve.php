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
<<<<<<< HEAD

    public function revers(){
        return $this->belongsTo('App\Subject','subject_id');
    }
=======
    public function subject(){
        return $this->belongsTo('App\Subject', 'subject_id');
    }
 



>>>>>>> 70b6660a9d466fff9e0a9102b9d1da1a87e14da1
}
