<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Type extends Model
{
    use HasFactory;

    public $fillable = [
        'name'
    ];

    // relazione one to many
    public function projects(): HasMany{
        return $this->hasMany( project::class );
    }
}
