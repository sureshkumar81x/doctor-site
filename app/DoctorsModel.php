<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DoctorsModel extends Model 
{

    protected $table = 'doctors';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('category_id', 'subcategory_id', 'name', 'phone', 'address', 'latitude', 'longitude', 'description', 'contents','website','profile_image', 'working_hours', 'avg_rating', 'status');
    protected $visible = array('id','category_id', 'subcategory_id', 'name', 'phone', 'address', 'latitude', 'longitude', 'description', 'contents','website', 'profile_image', 'working_hours', 'avg_rating', 'status');

    public function reviews()
    {
        return $this->hasMany('App\DoctorsReviewModel', 'doctor_id');
    }

    public function category()
    {
        return $this->belongsTo('App\CategoriesModel', 'category_id');
    }
    public function galleryTop()
    {
        return $this->hasMany('App\DoctorsGallery', 'doctor_id')->take(3);
    }
    public function galleryBottom()
    {
        return $this->hasMany('App\DoctorsGallery', 'doctor_id');
    }

}