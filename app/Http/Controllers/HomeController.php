<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;

use Session;
use Stripe;

class HomeController extends Controller
{
    
    public function index(){

        $products=product::paginate(9);
        return view('home.userpage',compact('products'));
    }
    
    
    public function redirect(){

        $usertype = Auth::user()->usertype;
        if ($usertype==1) {


            $total_prduct=product::all()->count();
            $total_order=order::all()->count();
            $total_user=user::all()->count();
            $orders=product::all();
            $total_revenus=0;
            foreach($orders as $order){

                $total_revenus=$total_revenus+$order->price;
            }
            $total_deliverey=order::where('delivery_status','delivered')->get()->count();
            $total_processing=order::where('delivery_status','processing')->get()->count();


            return view('admin.home', compact('total_prduct', 'total_order','total_user','total_revenus','total_deliverey','total_processing')); 
        }else {
            $products=product::paginate(9);
            return view('home.userpage',compact('products'));
        }
    }


    public function product_details($id){

        $product=product::find($id);
        return view('home.product_details',compact('product'));
    }
   


    public function add_cart(Request $request, $id){

        if (auth::id()) {
            $user=Auth::user();
            $product=product::find($id);
             
            $cart=new cart;
            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->phone=$user->phone;
            $cart->address=$user->adderes;
            $cart->product_title=$product->title;
            if ($product->discount_price!=null) {
                $cart->price=$product->discount_price;
            }else{
                $cart->price=$product->price;
            }
            
            $cart->quantity=$request->quantity;
            $cart->image=$product->image;
            $cart->product_id=$id;
            $cart->user_id=$user->id;
            $cart->save();
            return redirect()->back();
        }else{
            return redirect('/login');
        }
    } 



    public function show_cart(){

        if (auth::id()) {
            $user=Auth::id();
            $carts=cart::where('user_id',$user)->get();
            return view('home.show_cart',compact('carts'));
        }
        else{
            return redirect(':login');
        }
        
    }

    public function delete_cart($id){

        cart::find($id)->delete();
        return redirect()->back()->with('message','cart delete  saccasfulli !');
        
    }

    public function cach_order(){

        $user=auth::id();
        $carts=cart::where('user_id', $user)->get();
        foreach ($carts as $cart) {
            $order=new order;


            $order->name=$cart->name;
            $order->email=$cart->email;
            $order->phone=$cart->phone;
            $order->address=$cart->address;
            $order->user_id=$cart->user_id;

            $order->product_title=$cart->product_title;
            $order->quantity=$cart->quantity;
            $order->price=$cart->price;
            $order->image=$cart->image;
            $order->product_id=$cart->product_id;

            $order->payment_status='cash on delevry';
            $order->delivery_status='processing';

            $order->save();
            cart::find($cart->id)->delete();

        }
        return redirect()->back()->with('message','added to order  saccasfulli !');
        
    }

    public function stripe($totalprice){

        return view('home.stripe',compact('totalprice'));
    }


    public function stripePost(Request $request, $pp)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" => $pp * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Payment" 
        ]);


        $user=auth::id();
        $carts=cart::where('user_id', $user)->get();
        foreach ($carts as $cart) {
            $order=new order;


            $order->name=$cart->name;
            $order->email=$cart->email;
            $order->phone=$cart->phone;
            $order->address=$cart->address;
            $order->user_id=$cart->user_id;

            $order->product_title=$cart->product_title;
            $order->quantity=$cart->quantity;
            $order->price=$cart->price;
            $order->image=$cart->image;
            $order->product_id=$cart->product_id;

            $order->payment_status='paying';
            $order->delivery_status='processing';

            $order->save();
            cart::find($cart->id)->delete();

        }
      
        Session::flash('success', 'Payment successful! ');
              
        return back();
    }


    public function show_order(){

        if (auth::id()) {
            $user=Auth::id();
            $orders=order::where('user_id',$user)->get();
            return view('home.show_order',compact('orders'));
        }
        else{
            return redirect(':login');
        }
        
    }

    public function cansol_order($id){
        $order=order::find($id);
        $order->delivery_status='you cansole this order';
        $order->save();
        return redirect()->back();
    }
}
