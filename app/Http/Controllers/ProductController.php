<?php
namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use App\Cart;
use Stripe\Charge;
use Stripe\Stripe;
use App\Order;
use Auth;
use App\Contracts\Repos\IProductRepository;

class ProductController extends Controller
{
    /**
     * @instance of App\Contracts\Repos\IProductRepository
     */
    private $productRepo;

    public function __construct(
        IProductRepository $productRepo
    ){
        $this->$productRepo = $productRepo;
    }
    public function getIndex()
    {
        $products = Product::all();
        return view('Shop.index1', ['products' => $products]);
    }

    public function getAddToCart(Request $request ,$id)
    {
        $product = $this->productRepo->get($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart ($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        return redirect()->route('product.index1');
    }
    public function getReduceByOne($id)
    {
        
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart ($oldCart);
        $cart->reduceByOne($id);
        
        if (count($cart->items) > 0)
{
    Session::put('cart', $cart);
}
else{
    Session::forget('cart');
}

        return redirect()->route('product.shoppingcart');
       
    }

    public function getRemoveItem($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart ($oldCart);
        $cart->removeItem($id);
if (count($cart->items) > 0)
{
    Session::put('cart', $cart);
}
else{
    Session::forget('cart');
}

     
        return redirect()->route('product.shoppingcart');
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

        /*$order = new Order();
        $order->cart =serialize($cart);
        $order->location = $request->input('location');
        $order->Fname= $request->input('firstname');
        $order->Lname=$request->input('lastname');

        Auth::students()->orders()->save($order);*/
    }
    
}