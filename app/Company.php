<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'user_id',
    ];

    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function products()
    {
      return $this->hasMany('App\Project');
    }
}
