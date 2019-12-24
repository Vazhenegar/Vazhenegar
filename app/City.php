<?php

namespace App;

use App\State;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['state_id', 'city_name'];
    public function state()
    {
        return $this->belongsTo(State::class);
    }
}