<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        // ambil data
        // eloquent ORM
        $data = Product::all(); // SELECT * FROM products

        // kirim data
        return view('home', compact('data'));
    }
}
