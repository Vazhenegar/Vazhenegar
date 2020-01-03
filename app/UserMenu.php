<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMenu extends Model
{
    protected $fillable = ['RoleId', 'MenuItem', 'Url'];

}
