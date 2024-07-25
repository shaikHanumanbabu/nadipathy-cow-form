<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
    use HasFactory;
    protected $fillable = [
        'subcategory_name',
        'subcategory_image',
        'breed_id',
        'status',
    ];

    public function cows()
    {
        return $this->hasMany(Cow::class, 'sub_categorie_id', 'id');
    }

    public function breed()
    {
        return $this->belongsTo(Breed::class, 'breed_id', 'id');
    }

    
}
