<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['DepartmentName'];

    public function roles()
    {
        return $this->hasMany(Role::class);
    }
}
