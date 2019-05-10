<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Product;

class Subcategory extends Model
{
    use SoftDeletes;
	protected $guarded = [];


	public function products(){
		return $this->belongsToMany('App\Product');
}
}
