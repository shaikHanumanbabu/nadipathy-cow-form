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
        'link',
        'show_in_explore',
        'main_image',
        'bg_image',
        'short_description',
        'long_description',
        'long_description',
        'long_description',
        'youtube_link' ,
        'height' ,
    ];

    public function galleryimage()
    {
        return $this->hasMany(CowImages::class);
    }

    public function sub_category()
    {
        return $this->belongsTo(SubCategories::class, 'sub_categorie_id', 'id');
    }

    public function breed()
    {
        return $this->belongsTo(Breed::class, 'breed_id', 'id');
    }

    public function getYear(): string
    {
        // Regular expression to match "X Year" or "X Years"
        $pattern = '/\d+(\.\d+)?\s+years?/';
    
        // Perform the regular expression match
        if (preg_match($pattern, $this->name, $matches)) {
            return $matches[0];
        } else {
            return ''; // Return null if no match is found
        }
    }




}
