<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'TranslationFields','Role', 'Department', 'UserDocuments', 'QuizAnswer',
        'BankCard', 'ProfilePhoto',
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
        $this->belongsTo(User::class);
    }
}
