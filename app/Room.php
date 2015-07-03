<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model {

	protected $table = 'rooms';

    protected $fillable = array('roomName', 'bookable', 'userId');


    public function bookings()
    {
        return $this->hasMany('App\Booking');
    }

}
