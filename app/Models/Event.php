<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'short_description',
        'image',
        'link',
    ];

    public function galleryimage()
    {
        return $this->hasMany(EventImages::class);
    }
}
