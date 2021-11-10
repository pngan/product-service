<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return Product::paginate();
    }

    public function update(Request $request, $id){}
    public function store(Request $request){}
}
