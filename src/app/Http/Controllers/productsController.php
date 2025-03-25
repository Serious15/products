<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\productsRequest;

class productsController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function confirm(productsRequest $request)
    {
        $content = $request->only(['name', 'price', 'image', 'season', 'description']);
        return view('confirm', compact('content'));
    }
    public function store(productsRequest $request)
    {
        $content = $request->only(['name', 'price', 'image', 'season', 'description']);
        Contact::create($content);
        return;
    }
}
