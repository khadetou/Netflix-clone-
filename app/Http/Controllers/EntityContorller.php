<?php

namespace App\Http\Controllers;

use App\Models\Entities;
use Illuminate\Http\Request;

class EntityContorller extends Controller
{
    //
    public function index()
    {
        return view('entities.index', [
            'entities' => Entities::limit(1)->inRandomOrder()->get()
        ]);
    }
}