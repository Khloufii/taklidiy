<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\Product;
use App\Models\Order;

class AdminController extends Controller
{
    
    public function view_catagory(){

        $data=catagory::all();
        return view('admin.catagory',compact('data'));
    }
    


    public function add_catagory(Request $request){

        $date= new Catagory;
        $date->catagory_name=$request->catagory;
        $date->save();
        return redirect()->back()->with('message','catagory aded  saccasfulli !');
    }


    public function delate_catagory($id){

        catagory::find($id)->delete();
        return redirect()->back()->with('message','catagory delete  saccasfulli !');
    }
    
    
    public function view_product(){



        $catagorys=catagory::all();
        return view('admin.product',compact('catagorys'));
    }
    public function add_product(Request $request){

        $prod=new product;
        $prod->title=$request->title;
        $prod->description=$request->description;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product', $imagename);
        $prod->image=$imagename;

        $prod->catagory=$request->catagory;
        $prod->quantity=$request->quantity;
        $prod->price=$request->price;
        $prod->discount_price=$request->discount_price;
        $prod->save();

        return redirect()->back()->with('message','priduct aded  saccasfulli !');
    }


    public function show_product(){



        $products=product::all();
        return view('admin.show_product',compact('products'));
    }


    public function delete_product($id){



       product::find($id)->delete();
        return redirect()->back()->with('message','product delete  saccasfulli !');
    }


    public function edit_product($id){

        $product=product::find($id);
        $catagorys=catagory::all();
        return view('admin.edit_product',compact('product','catagorys'));
    }


    public function updata_product_form(Request $request , $id){

        $prod=product::find($id);
        $prod->title=$request->title;
        $prod->description=$request->description;

        if ($request->image) {
            $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product', $imagename);
        $prod->image=$imagename;
        }
        

        $prod->catagory=$request->catagory;
        $prod->quantity=$request->quantity;
        $prod->price=$request->price;
        $prod->discount_price=$request->discount_price;
        
        $prod->save();

        return redirect()->route('show_product')->with('message','update priducte succcsfly');
    }

    public function order(){
        $orders=order::all();
        return view('admin.order',compact('orders'));
    
    }
    public function delivered($id){
        $order=order::find($id);
        $order->delivery_status='delivered';
        $order->payment_status='paid';
        $order->save();
        return  redirect()->back();
    }
}
