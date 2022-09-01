<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    // Relationship
    public function Entities()
    {
        return $this->belongsTo(Entities::class, 'categoryId');
    }
}