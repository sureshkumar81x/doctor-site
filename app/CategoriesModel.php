<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriesModel extends Model 
{

    protected $table = 'categories';
    public $timestamps = true;
    protected $fillable = array('name', 'image', 'status');
    protected $visible = array('id','name', 'image', 'status');

    public function getDoctors()
    {
        return $this->hasMany('App\DoctorsModel', 'category_id');
    }

    public function getDiagnostics()
    {
        return $this->hasMany('App\DiagnosticCenterModel', 'category_id');
    }

    public function getHospitals()
    {
        return $this->hasMany('App\HospitalsModel', 'category_id');
    }

    public function subcategories()
    {
        return $this->hasMany('App\SubcategoriesModel', 'category_id');
    }

}