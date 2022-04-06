<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct()
    {
        // $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:product-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:product-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }


    public function index(Request $request)
    {
        $products = Product::latest()->paginate(5);
        return view('products.index', compact('products'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }


    public function create()
    {
        return view('products.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'details' => 'required'
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Products Created Successfully');

    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name'    => 'required',
            'details' => 'required'
        ]);
        $product->update($request->all());
        return redirect()->route('products.index')
            ->with('success', 'Products Updated Successfully');

    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')
            ->with('success', 'Products Deleted Successfully');
    }
}
