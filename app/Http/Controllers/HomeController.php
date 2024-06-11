<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @return
     */
    public function index()
    {
        return view('app.home');
    }

    /**
     * @return
     */
    public function produto(Product $product)
    {
        return view('app.produto', ['product' => $product]);
    }

    /**
     * @return
     */
    public function produtos()
    {
        $categories = Category::with('products')->get();

        return view('app.produtos', ['categories' => $categories]);
    }

    /**
     * @return
     */
    public function sobre()
    {
        return view('app.sobre');
    }

    /**
     * @return
     */
    public function carrinho()
    {
        return view('app.checkout');
    }

    /**
     * @return
     */
    public function contato()
    {
        return view('app.contato');
    }
}
