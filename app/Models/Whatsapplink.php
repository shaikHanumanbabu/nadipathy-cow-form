<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whatsapplink extends Model
{
    use HasFactory;
    protected $fillable = [
        'link',
        
    ];

    protected $table = 'whatsapp_link';
}
