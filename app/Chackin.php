<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chackin extends Model
{
    protected $table = 'chackins';
    protected $primaryKey = 'id';
    protected $fillable = [
        'stud_id','subject_name','status'
    ];
}
