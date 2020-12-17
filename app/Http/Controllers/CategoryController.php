<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //To get all category
    //
    public function get_categories(){

        $categories = Category::all();
        $title = 'Category';
        return view('admin/category', compact('categories', 'title'));
    }

    //
    //To update category using id
    //
    public function view_category(Request $request){
        return view('admin\addCategory');
    }
    public function add_category(Request $request){
        $category = new Category();
        $category->name = $request->get('categoryName');

        $category->save();
        return redirect()->route('get_categories');
    }

    //
    //To update category using id
    //
    public function view_edit_category($id){
        $category = Category::find($id);
        return view('admin/editCategory', compact('category'));
    }
    public function update_category(Request $request, $id){
        $category = Category::find($id);
        $category->name = $request->get('categoryName');

        $category->save();
        return redirect()->route('get_categories');

    }

    //
    //To delete category using id
    //
    public function delete_category($id){
        $category = Category::find($id);
        $category->delete();
        return back();
    }
}
