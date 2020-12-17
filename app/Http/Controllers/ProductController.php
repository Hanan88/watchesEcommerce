<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

  public function show_products(){
    $products = Product::all();
    return view('shop', compact('products'));
  }
    //To get all product
    //
  public function get_products(){
    $products = Product::all();
    return view('admin\product', compact('products'));
  }
  public function view_product(Request $request){
    return view('admin\addProduct');
  }


  public function add_product(Request $request){

    $product = new Product();
    $product->name= $request->get('productName');
    $product->description= $request->get('productDescription');
    $product->price= $request->get('productPrice');
    $product->quantity= $request->get('productQuantity');
    $product->brand_id= $request->get('productBrand');
    $product->category_id= $request->get('productCategory');
    if($request->hasFile('productimage')){
        $file= $request->file('productimage');

        $image_name= time().$file->getClientOriginalName();
        $image_path= 'images/product_images/';
        $file->move($image_path,$image_name);
        $image= $image_path.$image_name;
        $product->image= $image;
    }
    else{
        //error
    }
    $product->save();
    return redirect()->route('get_products'); //view_product

}

  public function view_edit_product($id){
      $product= Product::find($id);
      return view('admin\editProduct', compact('product'));
  }

  public function update_product(Request $request, $id){
      $product = Product::find($id);

      $product->name= $request->get('productName');
      if($request->hasFile('productimage')){
          $file= $request->file('productimage');

          $image_name= time().$file->getClientOriginalName();
          $image_path= 'images/product_images/';
          $file->move($image_path,$image_name);
          $image= $image_path.$image_name;
          $product->image= $image;
      }
      else{
          //error
      }
      $product->save();
      return redirect()->route('get_products');
  }

    //
    //To delete product using id
    //

    public function delete_product($id){
      $product = Product::find($id);
      $product->delete();
      return back();
  }

}
