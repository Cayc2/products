<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProducts() {
        $products = Product::all();
        return view('show-products', ['products' => $products]);
    }

    public function createProduct() {
        return view('create-product');
    }

    public function create(Request $request) {
        $request->validate([
            'name' => ['required', 'unique:products'],
            'price' => 'required|numeric'
        ],[
            'name.unique' => 'O produto já está cadastrado!',
            'name.required' => 'O campo é obrigatório!'
        ]);

        Product::create($request->except('_token'));

        return redirect()->route('PageShowProducts')
            ->with('success', 'Produto cadastrado com sucesso!');
    }
}
