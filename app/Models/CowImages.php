<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CowImages extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_name'
    ];

    public function cow()
    {
        return $this->belongsTo(Cow::class);
    }
}
