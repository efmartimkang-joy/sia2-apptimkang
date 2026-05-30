<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductController extends Controller  
{
    public function index()                 
    {
        $products = Product::all();         
        return view('products.index', compact('products'));
    }
}
