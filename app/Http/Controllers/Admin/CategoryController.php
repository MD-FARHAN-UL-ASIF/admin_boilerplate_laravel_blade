<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function category()
    {
        Session::put('page', 'category');

        $categories = Category::get()->toArray();
        return view('admin.categories.categories', compact('categories'));
    }

    public function addEditCategory(Request $request, $id = null)
    {
            Session::put('page', 'add_category');

        if($id == ""){
            $title = "Add Category";
            $category = new Category;
            $message = "Category added successfully";
        }else{
            $title = "Edit Category";
            $category = Category::findOrFail($id);
            $message = "Category edited successfully";
        }

        if($request->isMethod('post')){
            $data = $request->all();

            $rules = [
                'name' => 'required',
            ];

            $customMessages = [
                'name.required' => 'Category name is required',
            ];

            $validator = Validator::make($data, $rules, $customMessages);

            // Check if validation fails
            if ($validator->fails()) {
                // If validation fails, set error message and redirect back
                return redirect()->back()->with('error_message', $validator->errors()->first());
            }  

            $category->name = $data['name'];
            $category->save();
            return redirect('admin/categories')->with('success_message', $message);
        }

        return view('admin.categories.add_edit_category')->with(compact('title', 'category'));
    }

        
    public function deleteCategory($id)
    {
        Category::where('id', $id)->delete();
        return redirect()->back()->with('success_message', 'Category deleted...!');
    }
}
