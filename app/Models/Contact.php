<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    protected $table = 'contact';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'name',
        'address',
        'email',
        'content',
<<<<<<< HEAD
=======
        'created_by',
>>>>>>> 6d99061 (Authentication and Mail)
    ];

}
