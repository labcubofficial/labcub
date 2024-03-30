<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Yajra\DataTables\DataTables;
use File;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = array();
        $data['title'] = 'Sub Category';
        $data['subcategory'] = Category::where('parent_id','<>','0')->get();

        return view('admin.subcategory.subcategory', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array();
        $data['title'] = 'Add Sub Category';
        $data['subcategory'] = Category::where('parent_id','=','0')->get();

        return view('admin.subcategory.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(isset($request->image)){
            $filename = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('media/sub_category'), $filename);
        }else{
            $filename = null;
        }

        $status = isset($request->status)?'1':'0';

        Category::insert([
            'parent_id' => $request->parent_category,
            'category_name' => $request->category_name,
            'image' => $filename,
            'status' => $status,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->route('subcategory.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = array();
        $data['title'] = 'Edit Subcategory';
        $data['sub_category'] = Category::find($id);
        $data['subcategory'] = Category::where('parent_id','=','0')->get();

        return view('admin.subcategory.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id); 

        if(isset($request->image)){
            $filename = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('media/category'), $filename);
        }else{
            $filename = null;
        }

        $status = isset($request->status)?'1':'0';

        // Updating exisitng data
        $category = Category::find($id);
        $category->category_name = $request->category_name;
        $category->parent_id = $request->parent_category;
        $category->image = isset($filename)?$filename:$category->image;
        $category->status = $status;
        $category->updated_at = date('Y-m-d H:i:s');
        $category->save();

        if(isset($filename)){
            $imagePath = 'media/category/'.$request->old_image;
            File::delete($imagePath);
        }

        return redirect()->route('subcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findorFail($id);

        // Deleting image
        if(isset($category->image)){
            $imagePath = 'media/sub_category/'.$category->image;
            File::delete($imagePath);
        }

        // Deleting data from database
        $category->delete();
        
        return redirect()->route('subcategory.index');
    }
}
