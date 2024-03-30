<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Yajra\DataTables\DataTables;
use File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Category::where('parent_id','0')->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('image', function($row){
                        $image = isset($row->image)?'<img src="'.asset('media/category/'.$row->image).'" class="table-image" alt="image">':'<img src="'.asset('asset/images/category/blank.png').'" class="table-image" alt="image">';
                        return $image;
                    })
                    ->addColumn('status', function($row){
                        $status = ($row->status == 1)?"<span>Active</span>":"<span>Inactive</span>";
                        return $status;
                    })
                    ->addColumn('action', function($row){
                        $btn = '<button data-id='.$row->id.' class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">Edit</button><button data-id='.$row->id.' class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">Delete</button>';
                        return $btn;
                    })
                    ->rawColumns(['image','status','action'])
                    ->make(true);
        }

        $data = array();
        $data['title'] = 'Category';
        $data['category'] = Category::where('parent_id','0')->get();

        return view('admin.category.category',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array();
        $data['title'] = 'Add Category';

        return view('admin.category.create', $data);
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
            $request->image->move(public_path('media/category'), $filename);
        }else{
            $filename = null;
        }
        
        $status = ($request->status == '1')?'1':'0';

        // Adding new category
        Category::insert([
            'parent_id' => 0,
            'category_name' => $request->category_name,
            'image' => $filename,
            'status' => $status,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->route('category.index');
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
        $data['title'] = 'Edit Category';
        $data['categories'] = Category::find($id);
        
        return view('admin.category.edit', $data);
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

        // Updating exisitng data
        $category = Category::find($id);
        $category->category_name = $request->category_name;
        $category->image = isset($filename)?$filename:$category->image;
        $category->status = $request->status;
        $category->updated_at = date('Y-m-d H:i:s');
        $category->save();

        if(isset($filename)){
            $imagePath = 'media/category/'.$request->old_image;
            File::delete($imagePath);
        }

        return redirect()->route('category.index');
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
        
        if(isset($category->image)){
            $imagePath = 'media/category/'.$category->image;
            File::delete($imagePath);
        }

        $category->delete();
        
        return redirect()->route('category.index');
    }    
}
