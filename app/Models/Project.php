<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public $fillable = [
        // aggiunto 'cover_image'
        'titolo', 'contenuto', 'cover_image'
    ];

}
