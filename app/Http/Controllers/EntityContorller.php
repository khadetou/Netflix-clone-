<?php

namespace App\Http\Controllers;

use App\Models\Entities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EntityContorller extends Controller
{
    //
    public function index()
    {


        // $entities = DB::table('entities')->select('entities.id', 'entities.name as entity_name', 'entities.categoryId', 'entities.thumbnail', 'entities.preview', 'categories.id', 'categories.name')->join('categories', 'entities.categoryId', '=', 'categories.id')->limit(30)->get();
        $categories = DB::table('categories')->get();

        return view('entities.index', [
            'entitiesrand' => Entities::limit(1)->inRandomOrder()->get(),
            'categories' => $categories,
        ]);
    }
}