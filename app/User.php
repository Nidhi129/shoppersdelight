<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Role;
use App\Profile;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    use SoftDeletes;

    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'email', 'password', 'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

   
    public function role() {
        return $this->belongsTo('App\Role');
    }
    public function profile() {
        return $this->hasOne('App\Profile');
    }
    public function getRouteKeyName() {
        return 'slug';
    }
    public function getCountry() {
        return $this->profile->country->name;
    }
    public function getState() {
        return $this->profile->state->name;
    }
    public function getCity() {
        return $this->profile->city->name;
    }
}