<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // ← PENTING!
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}


// <?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

// class User extends Model
// {
//     protected $fillable = [
//         'name',
//         'email',
//         'password',
//     ];
// } 