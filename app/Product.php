<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Category;
use App\Subcategory;

class Product extends Model
{
    use SoftDeletes;
	protected $guarded = [];

	public function categories(){
		return $this->belongsToMany('App\Category');
}
	public function subcategories(){
		return $this->belongsToMany('App\Subcategory');
}
	public function getRouteKeyName(){
   	 return 'slug';
	}
}
