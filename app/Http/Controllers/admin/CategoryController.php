<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Yajra\DataTables\DataTables;

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
                        $image = isset($row->image)?'<img src="'.asset('asset/images/category/'.$row->image).'" class="table-image" alt="image">':'<img src="'.asset('asset/images/category/blank.png').'" class="table-image" alt="image">';
                        return $image;
                    })
                    ->addColumn('status', function($row){
                        $status = ($row->status == 1)?"<span>Active</span>":"<span>Inactive</span>";
                        return $status;
                    })
                    ->addColumn('action', function($row){
                        $btn = '<button data-id='.$row->id.' class="edit btn btn-info">Edit</button><button data-id='.$row->id.' class="delete btn btn-danger">Delete</button>';
                        return $btn;
                    })
                    ->rawColumns(['image','status','action'])
                    ->make(true);
        }

        $data = array();
        $data['title'] = 'Category';

        return view('admin.category.category',$data);
    }

    public function ajaxdata(Request $request){
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categories = Category::all();

        if($request->hasFile($request->image)){
            $filename = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('asset/images/category'), $filename);
        }else{
            $filename = null;
        }

        $status = isset($request->status)?$request->status:0;

        Category::insert([
            'parent_id' => 0,
            'category_name' => $request->category_name,
            'image' => $filename,
            'status' => $status,
        ]);

        return response()->json(['message' => 'Data uploaded successfully']);
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
        //
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
        //
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
        $category->delete();
        
        if(isset($category->image)){
            $image = url('asset/images/category'.'/'.$category->image);
            File::delete($image);
        }
        
        return response()->json(['success' => true]);
    }
}
