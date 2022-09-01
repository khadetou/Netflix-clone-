<?php

namespace App\Models;

// use App\Http\Controllers\Catogories;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Entities extends Model
{
    use HasFactory;

    // Relationship
    public function categories()
    {
        return $this->hasMany(Categories::class, 'categoryId');
    }
}