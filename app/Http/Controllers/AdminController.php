<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Section;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function index(){
        $product = Product::count();
        $order = Order::count();
        $user = User::count();
        return view('admin.index', compact('product', 'user', 'order'));
    }

    public function create_product(){
        $section = Section::get();
        return view('admin.product.create', compact('section'));
    }

    public function store(){
        $validate = request()->validate([
            'name' => 'required',
            'image' => 'required|image',
            'price' => 'required',
            'section_id' => 'required'
        ]);

       $product = new Product;

       $product->name = $validate['name'];
       $product->price = $validate['price'];
       $product->section_id = $validate['section_id'];

       if(request('image')){
        $file = request()->file('image');
        $filename = time(). '.' . $file->getClientOriginalName();
        $file->move('images/products/', $filename);

        $product->image = $filename;
       }

       $product->save();
       Alert::success('Success', 'product is successfully created');
       return redirect()->route('product');
    }

    public function view(){
        $product = Product::all();
        return view('admin.product.view', compact('product'));
    }

    public function order(){
        $order = Order::all();
        return view('admin.order.order', compact('order'));
    }

    public function paid(Order $order){
        $order->payment_status  = "Paid";
        $order->save();
        return redirect()->back();
    }

    public function edit_product($slug){
        $product = Product::where('slug', $slug)->first();
        return view('admin.product.edit', compact('product'));
    }

    public function update_product($slug)
    {
        $validate = request()->validate([
            'name' => 'string',
            'image' => 'image',
            'price' => 'string',
            'section_id' => 'numeric'
        ]);

        $product = Product::where('slug', $slug)->first();

        $product->name = $validate['name'];
        $product->price = $validate['price'];
        $product->section_id = $validate['section_id'];

        if (!empty(request('image'))) {

            if (!empty($product->image)) {
                unlink('images/products/' . $product->image);
            }

            $file = request()->file('image');
            $filename = time() . '.' . $file->getClientOriginalName();
            $file->move('images/products/', $filename);

            $product->image = $filename;
        }

        $product->save();
       Alert::success('Success', 'product is successfully updated');
        return redirect()->route('product');

    }

    public function delete_product(Product $product)
    {
        $product->delete();
        Alert::success('Success', 'product is successfully deleted');
        return redirect()->route('product');
    }


    // SECTION
    public function create_section(){
        return view('admin.section.create');
    }

    public function store_section(){
        $validate = request()->validate([
            'name' => 'required',
            'icon' => 'required',
        ]);

       Section::create([
        'name' => $validate['name'],
        'icon' => $validate['icon']
       ]);

       Alert::success('Success', 'section is successfully created');
       return redirect()->route('section');
    }

    public function view_section(){
        $section = Section::all();
        return view('admin.section.index', compact('section'));
    }
    public function edit_section($id){
        $section = Section::where('id', $id)->first();
        return view('admin.section.edit', compact('section'));
    }


    public function update_section($id)
    {
        $validate = request()->validate([
            'name' => 'string',
            'icon' => 'string',
        ]);

        $section = Section::where('id', $id)->first();

        $section->name = $validate['name'];
        $section->icon = $validate['icon'];
        $section->save();

       Alert::success('Success', 'section is successfully updated');
        return redirect()->route('section');

    }

    public function delete_section(Section $section)
    {
        $section->delete();
        Alert::success('Success', 'dection is successfully deleted');
        return redirect()->route('section');
    }
    }

