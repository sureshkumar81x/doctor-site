<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorsReviewModel extends Model 
{

    protected $table = 'doctors_review';
    public $timestamps = true;
    protected $fillable = array('doctor_id', 'name', 'comments', 'rating', 'status');
    protected $visible = array('id','doctor_id', 'name', 'comments', 'rating', 'status');

}