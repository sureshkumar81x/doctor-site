<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiagnosticReviewsModel extends Model 
{

    protected $table = 'diagnostic_reviews';
    public $timestamps = true;
    protected $fillable = array('diagnostic_id', 'name', 'comments', 'rating', 'status');
    protected $visible = array('diagnostic_id', 'name', 'comments', 'rating', 'status');

}