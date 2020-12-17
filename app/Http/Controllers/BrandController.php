<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    //To get all brand
    //
    public function get_brands(){
        $brands = Brand::all();
        $title= 'Brand';
        return view('admin\brand', compact('brands', 'title'));
    }

    public function view_brand(Request $request){
        return view('admin\addBrand');
    }

    public function add_brand(Request $request){

        $brand = new Brand();
        $brand->name= $request->get('brandName');
        if($request->hasFile('brandimage')){
            $file= $request->file('brandimage');

            $image_name= time().$file->getClientOriginalName();
            $image_path= 'images/brand_images/';
            $file->move($image_path,$image_name);
            $image= $image_path.$image_name;
            $brand->image= $image;
        }
        else{
            //error
        }
        $brand->save();
        return redirect()->route('get_brands'); //view_brand

    }

    public function view_edit_brand($id){
        $brand= Brand::find($id);
        return view('admin\editBrand', compact('brand'));
    }

    public function update_brand(Request $request, $id){
        $brand = Brand::find($id);

        $brand->name= $request->get('brandName');
        if($request->hasFile('brandimage')){
            $file= $request->file('brandimage');

            $image_name= time().$file->getClientOriginalName();
            $image_path= 'images/brand_images/';
            $file->move($image_path,$image_name);
            $image= $image_path.$image_name;
            $brand->image= $image;
        }
        else{
            //error
        }
        $brand->save();
        return redirect()->route('get_brands');
    }
    //
    //To delete brand using id
    //

    public function delete_brand($id){
        $brand = Brand::find($id);
        // dd($brand);
        $brand->delete();
        return back();
    }
}
