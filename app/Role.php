<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['RoleName'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function usermenus()
    {
        return $this->hasMany(UserMenu::class);
    }
}
