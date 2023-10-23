<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        $data['title'] = 'Blog';
        $data['blogs'] = Blog::all();

        return view('admin.blog.blog', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array();
        
        $data['parent_category'] = Category::where('status','1')->where('parent_id','0')->pluck('category_name', 'id');
        $data['sub_category'] = Category::where('status','1')->where('parent_id','<>','0')->pluck('category_name', 'id');

        return view('admin.blog.blog_create', $data);
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
            $request->image->move(public_path('media/blog'), $filename);
        }else{
            $filename = null;
        }

        Blog::insert([
            'title' => $request->title,
            'short_description' => $request->description,
            'intro' => $request->intro,
            'menu' => $request->menu,
            'body' => $request->body,
            'slug' => $request->slug,
            'is_recommended' => $request->is_recommended,
            'category_id' => $request->parent_category,
            'subcategory_id' => $request->sub_category,
            'image' => $filename,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        return Redirect()->intended('admin/blog');
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

        $data['blog'] = Blog::find($id);

        $data['parent_category'] = Category::where('status','1')->where('parent_id','0')->pluck('category_name', 'id');
        $data['sub_category'] = Category::where('status','1')->where('parent_id','<>','0')->pluck('category_name', 'id');

        return view('admin.blog.blog_edit', $data);
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
        $blog = Blog::findOrFail($id);

        if(isset($request->image)){
            if(isset($blog->image)){
                $imagePath = 'media/blog/'.$blog->image;
                File::delete($imagePath);
            }

            $filename = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('media/blog'), $filename);
        }else{
            $filename = $blog->image;
        }

        $blog->title = $request->title;
        $blog->short_description = $request->description;
        $blog->intro = $request->intro;
        $blog->menu = $request->menu;
        $blog->body = $request->body;
        $blog->slug = $request->slug;
        $blog->is_recommended = $request->is_recommended;
        $blog->category_id = $request->parent_category;
        $blog->subcategory_id = $request->sub_category;
        $blog->image = $filename;
        $blog->updated_at = date('Y-m-d H:i:s');
        $blog->save();

        return Redirect()->intended('admin/blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findorFail($id);
        
        if(isset($blog->image)){
            $imagePath = 'media/blog/'.$blog->image;
            File::delete($imagePath);
        }

        $blog->delete();

        return Redirect()->intended('admin/blog');
    }
}
