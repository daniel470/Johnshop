<?php
namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use App\Cart;
use Stripe\Charge;
use Stripe\Stripe;

class ProductController extends Controller
{
    public function getIndex()
    {
        $products = Product::all();
        return view('Shop.index1', ['products' => $products]);
    }

    public function getAddToCart(Request $request ,$id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart ($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        return redirect()->route('product.index1');
    }
    public function getCart()
    {
        if(!Session:: has('cart'))
        {
            return view('Shop.shoppingcart', ['products' => null]);
        }
        $oldCart= Session::get('cart');
        $cart = new Cart($oldCart);
        return view('Shop.shoppingcart', ['products' => $cart->items, 'totalPrice' =>$cart->totalPrice]);
    }

    public function getCheckout()
    {
        if(!Session::has('cart'))
        {
            return view('Shop.shoppingcart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('Shop.checkout', ['total' => $total]);
    }
}