<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Description;

class ProductDescriptionController extends Controller
{
    public function index($productId)
    {
       return Description::ofProduct($productId)->paginate();
    }

    public function store(Request $request){}
}
