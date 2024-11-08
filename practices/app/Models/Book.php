<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    public function Author(): BelongsTo{
        return $this->belongsTo(Author::class);
    }

    public function Genre(): BelongsTo{
        return $this->belongsTo(Genre::class);
    }
}
