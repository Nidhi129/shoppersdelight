<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\City;
use App\Role;
use App\Country;
use App\State;


class Profile extends Model
{
    use SoftDeletes;
	protected $guarded = [];

	public function getRouteKeyName(){
		return 'slug';
	}
	public function user(){
		return $this->belongsToMany('App\User');
	}
	public function country() {
		return $this->belongsTo('App\Country');
	}
	public function state() {
		return $this->belongsTo('App\State');
	}
	public function city() {
		return $this->belongsTo('App\City');
	}
	public function getCountry() {
		return $this->country->name;
	}
}
