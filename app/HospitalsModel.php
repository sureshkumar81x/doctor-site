<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HospitalsModel extends Model 
{

    protected $table = 'hospitals';
    public $timestamps = true;
    protected $fillable = array('category_id', 'subcategory_id', 'name', 'address', 'phone', 'description', 'latitude', 'longitude', 'image', 'status');
    protected $visible = array('category_id', 'subcategory_id', 'name', 'address', 'phone', 'description', 'latitude', 'longitude', 'image', 'status');

}