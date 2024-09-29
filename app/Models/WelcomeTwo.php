<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WelcomeTwo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image_one',
        'image_two',
        'image_three',
        'image_four',
    ];
}
