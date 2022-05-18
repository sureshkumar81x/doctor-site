<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorSpecialityMapModel extends Model 
{

    protected $table = 'doctors_speciality_map';
    public $timestamps = true;
    protected $fillable = array('doctor_id', 'speciality_id');
    protected $visible = array('id','doctor_id', 'speciality_id');

}