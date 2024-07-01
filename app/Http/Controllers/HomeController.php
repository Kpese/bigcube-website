<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{

    public function index(Request $request, $sectionId = null)
    {
        $sections = Section::all();
        if ($sectionId) {
            $products = Product::where('section_id', $sectionId)->paginate(8);
        } else {
            $products = Product::paginate(8);
        }

        return view('front.index', compact('products', 'sections', 'sectionId'));
    }


    public function cart(){
        return view('front.cart');
    }

    public function checkout(){
        if (Auth::check()) {
            $user = Auth::user();
            $cart = Cart::where('user_id', $user->id)->get();
        } else {
            $cart = session()->get('cart', []);
        }
    return view('front.checkout', compact('cart'));
    }

    public function thank(){
        return view('front.thank');
    }

    public function add_cart(Product $product){
        $products = $product;

        // Check if user is authenticated
        if (Auth::check()) {
            $user = Auth::user();
            $product_exist = Cart::where('product_id', $products->id)->where('user_id', $user->id)->first();

            if ($product_exist) {
                $cart = Cart::find($product_exist->id);
                $quantity = $cart->quantity;
                $cart->quantity = $quantity + request('quantity');
                $cart->price = $products->price * $cart->quantity;
                $cart->save();
            } else {
                $cart = new Cart;
                $cart->user_id = $user->id;
                $cart->customer_name = $user->name;
                $cart->customer_email = $user->email;
                $cart->product_id = $products->id;
                $cart->product_name = $products->name;
                $cart->price = $products->price * request('quantity');
                $cart->product_image = $products->image;
                $cart->quantity = request('quantity');
                $cart->save();
            }
        } else {
            // Handle cart for guest users using session
            $cart = session()->get('cart', []);

            if (isset($cart[$products->id])) {
                $cart[$products->id]['quantity'] += request('quantity');
                $cart[$products->id]['price'] = $products->price * $cart[$products->id]['quantity'];
            } else {
                $cart[$products->id] = [
                    'product_id' => $products->id,
                    'product_name' => $products->name,
                    'price' => $products->price * request('quantity'),
                    'product_image' => $products->image,
                    'quantity' => request('quantity'),
                ];
            }

            session()->put('cart', $cart);
        }

        return redirect()->route('checkout');
    }

    public function store_checkout(){
        $validate = request()->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|numeric',
            'address' => 'required|string',
        ]);
            $id = Auth::user()->id;
            $carts = Cart::where('user_id', $id)->get();

            foreach ($carts as $cart){
             $order = new Order;

            $order->user_id = $cart->user_id;
            $order->product_id = $cart->product_id;
            $order->customer_name = $validate['name'];
            $order->customer_email = $validate['email'];
            $order->customer_phone = $validate['phone'];
            $order->customer_address = $validate['address'];
            $order->product_name = $cart->product_name;
            $order->price = $cart->price;
            $order->quantity = $cart->quantity;
            $order->product_image = $cart->product_image;
            $order->payment_status = 'bank transfer';
            $order->delivery_status ='processing';

            if(request('receipt')){
                $file = request()->file('receipt');
                $filename = time() . "." . $file->getClientOriginalName();
                $file->move('images/receipt/', $filename);

                $order->receipt = $filename;
            }

            $order->save();

            $cart_id = $cart->id;
            Cart::find($cart_id)->delete();
            }

            return redirect()->route('thank');
        }


        public function destroy_cart(Cart $cart){
            $cart->delete();
            Alert::success('success', 'cart deleted successfully');
            return redirect()->route('checkout');
        }



}
