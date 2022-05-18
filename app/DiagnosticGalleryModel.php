<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiagnosticGalleryModel extends Model 
{

    protected $table = 'diagnostic_gallery';
    public $timestamps = true;
    protected $fillable = array('diagnostic_id', 'image', 'status');
    protected $visible = array('id','diagnostic_id', 'image', 'status');

}