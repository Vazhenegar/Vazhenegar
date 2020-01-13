<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['DepartmentName'];

    public function roles()
    {
        $this->hasMany(Role::class);
    }
}
