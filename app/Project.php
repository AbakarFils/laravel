<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable=[
    	'name',
    	'description',
    	'company_id',
    	'user_id',
    	'days'
    ];
 // un project appartient à un et un seul user
    public function users(){
        return $this->belongsToMany('App\User');
    }

    public function user()
    {
        return $this->belongsToMany('App\User');
    }

    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
}