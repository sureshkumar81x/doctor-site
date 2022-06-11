<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HospitalsModel extends Model 
{

    protected $table = 'hospitals';
    public $timestamps = true;
    protected $fillable = array('category_id', 'subcategory_id', 'name', 'address', 'phone', 'description', 'contents','website','working_hours','avg_rating', 'latitude', 'longitude', 'image', 'status');
    protected $visible = array('id','category_id', 'subcategory_id', 'name', 'address', 'phone', 'description', 'contents','website','working_hours', 'avg_rating','latitude', 'longitude', 'image', 'status');

    public function gallery()
    {
        return $this->hasMany('App\HospitalsGallery', 'hospital_id');
    }

    public function reviews()
    {
        return $this->hasMany('App\HospitalReviewModel', 'hospital_id');
    }

    public function category()
    {
        return $this->belongsTo('App\CategoriesModel', 'category_id');
    }
    public function galleryTop()
    {
        return $this->hasMany('App\HospitalsGallery', 'hospital_id')->take(3);
    }
    public function galleryBottom()
    {
        return $this->hasMany('App\HospitalsGallery', 'hospital_id');
    }
}