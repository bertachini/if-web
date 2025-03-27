<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ProductController extends Controller
{
    function show(): View {
        $products = Product::all();
        return view('products_show', ['products' => $products]);
    }

    function new(): View {
        return view('products_new');
    }

    function store(Request $r): RedirectResponse {
        $product = new Product();
        $product->name = $r->name;
        $product->price = $r->price;
        $product->save();
        return redirect()->route('products.show');
    }

    function update($id): View {
        $product = Product::findOrFail($id);
        return view('products_update', ['product' => $product]);
    }

    function store_update(Request $r): RedirectResponse {
        $product = Product::findOrFail($r->id);
        $product->name = $r->name;
        $product->price = $r->price;
        $product->save();
        return redirect()->route('products.show');

    }
}
