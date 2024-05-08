<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Sub_category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

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

             // Check if image was uploaded
        if ($request->hasFile('image')) {
            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                // Get image extension
                $extension = $image_tmp->getClientOriginalExtension();
                // Generate new image name
                $image_name = rand(111, 99999) . '.' . $extension;
                $image_path = 'admin/images/category_images/' . $image_name;
                // Save image
                Image::make($image_tmp)->save($image_path);
                // Assign image name to data
                $category->image = $image_name;
            }
        } elseif (!$category->image) {
                // If no image was uploaded and no image is already set, assign default image
                $category->image = 'no_image.jpg';
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


    public function sub_category()
    {
        Session::put('page', 'sub_category');

        $subCategories = Sub_category::with('category')->get();

        return view('admin.categories.sub_categories', compact('subCategories'));
    }


    public function addEditSubCategory(Request $request, $id = null)
{
    Session::put('page', 'add_sub_category');

    if ($id == "") {
        $title = "Add Sub Category";
        $sub_category = new Sub_category;
        $message = "Sub Category added successfully";
    } else {
        $title = "Edit Sub Category";
        $sub_category = Sub_category::findOrFail($id);
        $message = "Sub Category edited successfully";
    }

    if ($request->isMethod('post')) {
        $data = $request->all();

        $rules = [
            'title' => 'required',
            'sub_title' => 'required',
            'investment_size' => 'required',
            'net_income' => 'required',
            'irr' => 'required',
            'payback_period' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required|exists:categories,id',
        ];

        $customMessages = [
            'title.required' => 'Title is required',
            'sub_title.required' => 'Sub Title is required',
            'investment_size.required' => 'Investment Size is required',
            'net_income.required' => 'Net Income is required',
            'irr.required' => 'IRR is required',
            'payback_period.required' => 'Payback Period is required',
            'description.required' => 'Description is required',
            'price.required' => 'Price is required',
            'category_id.required' => 'Category is required',
            'category_id.exists' => 'Selected category does not exist',
        ];

        $validator = Validator::make($data, $rules, $customMessages);

        // Check if validation fails
        if ($validator->fails()) {
            // If validation fails, set error message and redirect back
            return redirect()->back()->with('error_message', $validator->errors()->first());
        }

        $sub_category->title = $data['title'];
        $sub_category->sub_title = $data['sub_title'];
        $sub_category->investment_size = $data['investment_size'];
        $sub_category->net_income = $data['net_income'];
        $sub_category->irr = $data['irr'];
        $sub_category->payback_period = $data['payback_period'];
        $sub_category->description = $data['description'];
        $sub_category->price = $data['price'];
        $sub_category->category_id = $data['category_id'];

        $sub_category->save();

        return redirect('admin/sub-categories')->with('success_message', $message);
    }

    // Retrieve all categories to populate the category dropdown
    $categories = Category::pluck('name', 'id');

    return view('admin.categories.add_edit_sub_category')->with(compact('title', 'sub_category', 'categories'));
}

    public function deleteSubCategory($id)
    {
        try {
            $subCategory = Sub_category::findOrFail($id);

            $subCategory->delete();

            return redirect()->back()->with('success_message', 'Sub Category deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error_message', 'Failed to delete Sub Category.');
        }
    }


}
