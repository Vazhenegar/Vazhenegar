<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMenu extends Model
{
    protected $fillable = ['MenuItem', 'Url'];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
