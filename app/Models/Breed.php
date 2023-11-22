<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'short_description',
        'long_description',
        'image',
        'link',
    ];

    public function categories()
    {
        return $this->hasMany(SubCategories::class);
    }

    public function cow()
    {
        return $this->hasMany(Cow::class);
    }
}
