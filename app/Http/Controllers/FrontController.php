<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function welcome() {

        $products = Product::where('is_accepted', true)->take(6)->get()->sortByDesc('created_at');

        return view('welcome', compact('products'));
    }

    public function show(Category $category){
        return view('category.show', compact('category'));
    }


    public function searchProducts(Request $request)
    {
        $products = Product::search($request->searched)->where('is_accepted', true)->paginate(10);
        return view('product.index', compact('products'));
    }

    public function setLanguage($lang){
        
        session()->put('locale', $lang);
        return redirect()->back();
    }
  

}

