<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timesheet extends Model
{

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'date', 'time_in', 'capture_img_in', 'time_out', 'capture_img_out', 'user_id',
  ];
}
