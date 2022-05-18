<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiagnosticCenterModel extends Model 
{

    protected $table = 'diagnostic_center';
    public $timestamps = true;
    protected $fillable = array('category_id', 'subcategory_id', 'name', 'phone', 'address', 'description', 'latitude', 'longitude', 'image', 'status', 'avg_rating');
    protected $visible = array('id','category_id', 'subcategory_id', 'name', 'phone', 'address', 'description', 'latitude', 'longitude', 'image', 'status', 'avg_rating');

    public function gallery()
    {
        return $this->hasMany('App\DiagnosticGalleryModel', 'diagnostic_id');
    }

    public function reviews()
    {
        return $this->hasMany('App\DiagnosticReviewsModel', 'diagnostic_id');
    }

}