<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flights extends Model
{

  protected $table = 'flights';

  protected $fillable = [
    'user_id','airline_id','flightNumber','departurePort','arrivalPort','departureTime','arrivalTime',
  ];

  /**
   * One to one relationships
   */
  public function airline()
  {
    return $this->belongsTo('App\Airlines', 'airline_id');
  }

}