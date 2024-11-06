<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', [
            'products' => $products
        ]);
    }


    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);
        Product::create([
            'user_id' => Auth::id(),
            'name' => request('name'),
            'price' => request('price'),
            'description' => request('description'),
            'amount_in_stock' => request('amount_in_stock'),
            'min' => request('min'),
        ]);

        return redirect('/products');

    }

    public function show(Product $product){
        return view('products.show', ['product' => $product]);
    }


    public function update(Product $product)
    {

        request()->validate([
            'title' => ['required', 'min:3'],
            'price' => ['required']
        ]);

        $product->update([
            'title' => request('title'),
            'price' => request('price'),
        ]);
        return redirect('/products/' . $product->id);
    }

    public function edit(Product $product){ 
        return view('products.edit', ['product' => $product]);
    }
    public function destroy(Product $product){
        $product->delete();
        return redirect('/products');
    }

}
