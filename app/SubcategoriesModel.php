<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubcategoriesModel extends Model 
{

    protected $table = 'subcategories';
    public $timestamps = true;
    protected $fillable = array('category_id', 'name', 'image','slug', 'status');
    protected $visible = array('id','category_id', 'name', 'image','slug', 'status');

    public function getDoctors()
    {
        return $this->hasMany('App\DoctorsModel', 'subcategory_id');
    }

    public function getDiagnostics()
    {
        return $this->hasMany('App\DiagnosticCenterModel', 'subcategory_id');
    }

    public function getHospitals()
    {
        return $this->hasMany('App\HospitalsModel', 'subcategory_id');
    }

    public function category()
    {
        return $this->belongsTo('App\CategoriesModel', 'category_id');
    }

}