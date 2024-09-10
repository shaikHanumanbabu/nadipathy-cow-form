<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


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

    protected static function boot()
    {
        parent::boot();

        // Example: Hooking into the 'creating' event
        static::creating(function ($sub_category) {
            // Logic to execute before a post is created
            $sub_category->slug = Str::slug($sub_category->title);
        });

        // Example: Hooking into the 'updating' event
        static::updating(function ($sub_category) {
            // Logic to execute before a post is updated
            $sub_category->slug = Str::slug($sub_category->title);

        });
    }

    
}
