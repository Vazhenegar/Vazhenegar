<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'FirstName', 'LastName', 'BirthDate', 'Gender', 'Email', 'Password',
        'FixNumber', 'MobileNumber', 'State', 'City', 'Address', 'Degree',
        'GraduationDate', 'GraduationField', 'Resume', 'UserSelectedLangs',
        'TranslationFields', 'UserDocuments', 'Department', 'role_id', 'Status',
        'Mode', 'QuizAnswer', 'QuizReference', 'BankCard', 'ProfilePhoto',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'Password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'BirthDate' => 'datetime',
        'GraduationDate' => 'datetime',

    ];

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->Password;
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function status(string $id)
    {
        return UserStatus::where('id', $id)->value('Status');
    }

    public function mode(string $id)
    {
        return UserMode::where('id', $id)->value('Mode');
    }

}
