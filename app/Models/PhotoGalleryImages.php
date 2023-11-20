<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoGalleryImages extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo_gallery_id',
        'image',
    ];

    public function gallery()
    {
        return $this->belongsTo(photoGallery::class);
    }
}
