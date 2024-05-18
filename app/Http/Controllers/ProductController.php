<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    
        
        
        public function index()
        {
            $products = Product::all();
            $data = [
                'products' => $products,
            ];
            return view('pointofsales.index', $data);
        }
        
    }

