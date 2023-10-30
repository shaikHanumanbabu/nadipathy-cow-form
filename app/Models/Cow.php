<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cow extends Model
{
    use HasFactory;

    protected $fillable = [
        'breed_id',
        'sub_categorie_id',
        'name',
        'main_image',
        'short_description',
        'long_description',
    ];
}
