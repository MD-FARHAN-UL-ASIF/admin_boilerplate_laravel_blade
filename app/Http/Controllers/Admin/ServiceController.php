<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $service = Service::get()->toArray();
        //dd($services);
        return view('admin.services.services')->with(compact('Service'));
    }

        public function addEditService(Request $request, $id)
    {
        Session::put('page', 'add_services');

        if ($id === null) {
            $title = "Add Service";
            $servicedata = new Service;
            $message = "service added successfully";
        } else {
            $title = "Edit service";
            $servicedata = Service :: findOrFail($id);
            $message = "service updated successfully";
        }

        if ($request->isMethod('post')) {
            $data = $request->all();

            $rules = [
                'title' => 'required|max:255',
                'description' => 'required',
                'link_text' => 'required',
                'image' => 'image'
            ];

            $customMessage = [
                'title.required' => "Title is required",
                'description.required' => "Description is required",
                'link_text.required' => "Link text is required",
                'image.image' => "Valid image required",
            ];


            $validator = Validator::make($data, $rules, $customMessage);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // Check if image was uploaded
            if ($request->hasFile('image')) {
                $image_tmp = $request->file('image');
                if ($image_tmp->isValid()) {
                    // Get image extension
                    $extension = $image_tmp->getClientOriginalExtension();
                    // Generate new image name
                    $image_name = rand(111, 99999) . '.' . $extension;
                    $image_path = 'admin/images/service_images/' . $image_name;
                    // Save image
                    Image::make($image_tmp)->save($image_path);
                    // Assign image name to data
                    $servicedata->image = $image_name;
                }
            }

            // Assign other form data
            $servicedata->title = $data['title'];
            $servicedata->description = $data['description'];
            $servicedata->link_text = $data['link_text'];

            // Save the data
            $servicedata->save();

            return redirect('wise-corporation/services')->with('success_message', $message);
        }

        return view('admin.services.add_edit_service')->with(compact('title', 'servicedata'));
    }
}
