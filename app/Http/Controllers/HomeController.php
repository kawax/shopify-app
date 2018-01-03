<?php

namespace App\Http\Controllers;

use ShopifyApp;

class HomeController extends Controller
{
    /**
     * Index route which displays the home page of the app
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = ShopifyApp::shop()->api()->request('GET', '/admin/products.json')->body->products;
//        dd($products);

        return view('products')->with(compact('products'));
    }
}
