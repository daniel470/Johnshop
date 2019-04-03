<?php
namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
class ProductController extends Controller
{
    public function getIndex()
    {
        $products = Product::all();
        return view('Shop.index1', ['products' => $products]);
    }
}