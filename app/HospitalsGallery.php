<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HospitalsGallery extends Model
{
    protected $table = 'hospitals_gallery';
    public $timestamps = true;
    protected $fillable = array('hospital_id', 'image', 'status');
    protected $visible = array('id','hospital_id', 'image', 'status');
}
