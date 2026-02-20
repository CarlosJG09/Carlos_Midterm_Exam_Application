<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'Anime One', 'description' => 'Action anime series', 'price' => 9.99],
            ['name' => 'Anime Two', 'description' => 'Romance anime series', 'price' => 12.99],
            ['name' => 'Anime Three', 'description' => 'Fantasy anime series', 'price' => 14.99],
            ['name' => 'Anime Four', 'description' => 'Sci-fi anime series', 'price' => 11.99],
            ['name' => 'Anime Five', 'description' => 'Horror anime series', 'price' => 8.99],
        ];

        return view('blade', compact('products'));
    }
}