<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorsGallery extends Model
{
    protected $table = 'doctors_gallery';
    public $timestamps = true;
    protected $fillable = array('doctor_id', 'image', 'status');
    protected $visible = array('id','doctor_id', 'image', 'status');
}
