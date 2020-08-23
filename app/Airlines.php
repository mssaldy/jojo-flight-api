<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model item ads
 */
class Airlines extends Model
{

  public function flight() {
      return $this->hasMany('App\Flights', 'airline_id');
  }

  public static function boot() {
        parent::boot();

        static::deleting(function($user) { 
            $user->flight()->delete();
        });
    }
}