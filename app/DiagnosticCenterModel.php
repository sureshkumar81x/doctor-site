<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiagnosticCenterModel extends Model 
{

    protected $table = 'diagnostic_center';
    public $timestamps = true;
    protected $fillable = array('category_id', 'subcategory_id', 'name', 'phone', 'address', 'description', 'contents','website','working_hours', 'latitude', 'longitude', 'image','slug', 'status', 'avg_rating');
    protected $visible = array('id','category_id', 'subcategory_id', 'name', 'phone', 'address', 'description', 'contents','website','working_hours', 'latitude', 'longitude', 'image','slug', 'status', 'avg_rating');

    public function gallery()
    {
        return $this->hasMany('App\DiagnosticGalleryModel', 'diagnostic_id');
    }

    public function reviews()
    {
        return $this->hasMany('App\DiagnosticReviewsModel', 'diagnostic_id');
    }

    public function category()
    {
        return $this->belongsTo('App\CategoriesModel', 'category_id');
    }
    public function galleryTop()
    {
        return $this->hasMany('App\DiagnosticGalleryModel', 'diagnostic_id')->take(3);
    }
    public function galleryBottom()
    {
        return $this->hasMany('App\DiagnosticGalleryModel', 'diagnostic_id');
    }

}