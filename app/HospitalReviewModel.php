<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HospitalReviewModel extends Model
{
    protected $table = 'hospital_reviews';
    public $timestamps = true;
    protected $fillable = array('hospital_id', 'name', 'comments', 'rating', 'status');
    protected $visible = array('id','hospital_id', 'name', 'comments', 'rating', 'status');
}
