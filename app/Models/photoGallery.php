<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class photoGallery extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'title',
    ];

    public function galleryimage()
    {
        return $this->hasMany(PhotoGalleryImages::class);
    }

    // protected static function boot() {
    //     parent::boot();
    
    //     static::creating(function ($question) {
    //         $question->slug = Str::slug($question->title);
    //     });
    // }
}
