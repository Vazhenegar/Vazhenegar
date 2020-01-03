<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['RoleName'];

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
