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


}
