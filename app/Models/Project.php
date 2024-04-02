<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    use HasFactory;

    public $fillable = [
        // aggiunto 'cover_image'
        'titolo', 'contenuto', 'cover_image'
    ];

    // relazione one to many
    public function type(): BelongsTo{
        return $this->BelongsTo( Type::class );
    }



}
