<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{

    public function getUsers(){
      return $this->hasMany('App\User');
    }

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'dept_name',
  ];
}
