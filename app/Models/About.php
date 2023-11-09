<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'creator_link',
        'system_link',
        'image_one',
        'image_two',
        'image_three',
        'image_four',
    ];
}
