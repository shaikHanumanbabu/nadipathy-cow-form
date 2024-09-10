<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
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

    protected static function boot()
    {
        parent::boot();

        // Example: Hooking into the 'creating' event
        static::creating(function ($breed) {
            // Logic to execute before a post is created
            $breed->slug = Str::slug($breed->title);
        });

        // Example: Hooking into the 'updating' event
        static::updating(function ($breed) {
            // Logic to execute before a post is updated
            $breed->slug = Str::slug($breed->title);

        });
    }
}
