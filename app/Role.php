<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['RoleName'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function department()
    {
       return $this->belongsTo(Department::class);
    }

    public function main_menus()
    {
        return $this->hasMany(UserMainMenu::class);
    }

    public function sub_menus()
    {
        return $this->hasMany(UserSubMenu::class);
    }


}
