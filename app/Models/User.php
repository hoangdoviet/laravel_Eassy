<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Contracts\Auth\MustVerifyEmail;
=======
>>>>>>> 6d99061 (Authentication and Mail)
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
<<<<<<< HEAD
    use HasFactory, Notifiable;

=======
    use Notifiable;
    public $timestamps = false;
    use HasFactory;
>>>>>>> 6d99061 (Authentication and Mail)
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
<<<<<<< HEAD
        'name',
        'email',
        'password',
=======
        'id',
        'name',
        'email',
        'password',
        'remember_token',
>>>>>>> 6d99061 (Authentication and Mail)
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
<<<<<<< HEAD
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
=======

    // public function contact()
    // {
    //     return $this->hasMany('App\Models\Contact');
    // }
>>>>>>> 6d99061 (Authentication and Mail)
}
