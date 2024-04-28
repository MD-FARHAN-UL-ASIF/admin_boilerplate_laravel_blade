<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CmsPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Session;


class CmsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index()
{
    Session::put('page', 'cms-page');
    $CmsPages = CmsPage::get()->toArray();
    // dd($CmsPages);
    return view('admin.pages.cms_pages')->with(compact('CmsPages'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CmsPage $cmsPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
public function edit(Request $request, $id = null)
{
    if($id == ""){
        $title = "Add CMS Page";
        $cmspage = new CmsPage;
        $message = "CMS Page added successfully";
    }else{
        $title = "Edit CMS Page";
        $cmspage = CmsPage::findOrFail($id);
        $message = "CMS Page edited successfully";
    }

    if($request->isMethod('post')){
        $data = $request->all();

        $rules = [
            'title' => 'required',
            'url' => 'required',
            'description' => 'required'
        ];

        $customMessages = [
            'title.required' => 'Page Title is required',
            'url.required' => 'Page Url is required',
            'description' => 'Page Description is required'
        ];

        $validator = Validator::make($data, $rules, $customMessages);

        // Check if validation fails
        if ($validator->fails()) {
            // If validation fails, set error message and redirect back
            return redirect()->back()->with('error_message', $validator->errors()->first());
        }  

        $cmspage->title = $data['title'];
        $cmspage->url = $data['url'];
        $cmspage->description = $data['description'];
        $cmspage->meta_title = $data['meta_title'];
        $cmspage->meta_description = $data['meta_description'];
        $cmspage->meta_keywords = $data['meta_keywords'];
        $cmspage->status = 1;
        $cmspage->save();
        return redirect('admin/cms-page')->with('success_message', $message);
    }

    return view('admin.pages.add_edit_cmspage')->with(compact('title', 'cmspage'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CmsPage $cmsPage)
    {
     if($request->ajax()){
        $data = $request->all();
        // echo "<pre>"; print_r($data); die;

        if($data['status'] == "Active"){
            $status = 0;
        }else{
            $status =1;
        }
        CmsPage::where('id', $data['page_id'])->update(['status' =>$status]);
        return response()->json(['status' => $status, 'page_id' => $data['page_id']]);
     }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        CmsPage::where('id', $id)->delete();
        return redirect()->back()->with('success_message', 'CMS Page deleted...!');
    }
}
