<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string',
            'phone' => 'required|integer',
            'email' => 'required|email',
        ]);

        var_dump($request);
        die();
        $product = Product::create([
            'name'  => $request->name,
            'phone' => $request->phone,
            'eamil' => $request->email
        ]);

        return response()->json([
            'message' => 'Product created successfully!',
            'data'    => $product,
        ], 201);
    }
}
