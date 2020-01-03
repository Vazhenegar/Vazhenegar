<?php

namespace App;

use App\City;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = ['StateName'];
    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
