<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        $data['title'] = 'Home';
        $data['parent_categories'] = Category::where('status', '1')->where('parent_id','0')->get();
        $data['sub_categories'] = Category::where('status', '1')->where('parent_id','<>','0')->get();

        $blogs = Blog::where('is_recommended','1')->get();

        $blog_arr = [];
        foreach($blogs as $blog){

            $category_slug = Str::slug(Category::category($blog->category_id)->category_name, '-');
            $subcategory_slug = Str::slug(Category::category($blog->subcategory_id)->category_name, '-');

            $blog_arr[] = [
                'id' => $blog->id,
                'category_name' => $category_slug,
                'subcategory_name' => $subcategory_slug,
                'title' => $blog->title,
                'short_description' => $blog->short_description,
                'body' => $blog->body,
                'image' => $blog->image,
                'slug' => $blog->slug,
                'is_recommended' => $blog->is_recommended,
            ];
        }

        $data['blogs'] = $blog_arr;
        
        return view('front.landing.landing',$data);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
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
        //
    }
}
