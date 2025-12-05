<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name','title','subtitle','about','profile_image','cv_link',
        'email','phone','location',
        'github','linkedin','facebook','twitter'
    ];
}
