<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->input('select');
        $query = Product::query();

        if ($sort === '高い順に表示') {
            $query->orderBy('price', 'desc');
        } elseif ($sort === '低い順に表示') {
            $query->orderBy('price', 'asc');
        }

        $products = $query->paginate(6);

        return view('index', compact('products'));
    }
}
