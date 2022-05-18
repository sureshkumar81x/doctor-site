<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageContentModel extends Model 
{

    protected $table = 'page_content';
    public $timestamps = true;
    protected $fillable = array('key', 'description', 'contents', 'image', 'page');
    protected $visible = array('id','key', 'description', 'contents', 'image', 'page');

}