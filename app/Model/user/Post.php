<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;
class Post extends Model
{
     use Commentable;
     protected $guarded = [];

    // relasi 
    public function tags() {
    	return $this->belongsToMany('App\Model\user\tag','post_tags')->withTimestamps();
    }
    // relasi 
    public function categories() {
    	return $this->belongsToMany('App\Model\user\category','category_posts')->withTimestamps();
    }

    //biding url key id diganti dengan slug 
    public function getRouteKeyName() 
    {
    	return 'slug';
    }


}
