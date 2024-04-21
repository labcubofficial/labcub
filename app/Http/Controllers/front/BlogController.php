<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Blog;
use App\Models\BlogInteraction;

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
        $data['title'] = 'Blogs';

        $blogs = Blog::all();

        $blog_arr = [];
        foreach($blogs as $blog){

            $category_slug = Str::slug(Category::category($blog->category_id)->category_name, '-');
            $category_name = Category::category($blog->category_id)->category_name;
            $subcategory_slug = Str::slug(Category::category($blog->subcategory_id)->category_name, '-');

            $blog_arr[] = [
                'id' => $blog->id,
                'category_slug' => $category_slug,
                'category_name' => $category_name,
                'subcategory_name' => $subcategory_slug,
                'title' => $blog->title,
                'short_description' => $blog->short_description,
                'body' => $blog->body,
                'image' => $blog->image,
                'slug' => $blog->slug,
                'is_recommended' => $blog->is_recommended,
                'created_at' => date('M d, Y', strtotime($blog->created_at)),
            ];
        }

        $data['blogs'] = $blog_arr;

        return view('front.blog.list', $data);
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
    public function show(Request $request, $category, $sub_category, $slug)
    {
        $data = array();

        $category_name = str_replace('-', ' ', Str::title($category));
        $subcategory_name = str_replace('-', ' ', Str::title($sub_category));

        $category_id = Category::whereRaw('LOWER(category_name) = ?', [strtolower($category_name)])->value('id');
        $subcategory_id = Category::whereRaw('LOWER(category_name) = ?', [strtolower($subcategory_name)])->value('id');

        $blog = Blog::where('category_id', $category_id)->where('subcategory_id', $subcategory_id)->where('slug', $slug)->first();

        if(empty($blog)){
            return view('front.error.404');
        }

        $blog->category_id = Category::category($blog->category_id)->category_name;

        $data['title'] = $blog->title;
        $data['blog'] = $blog;

        $menu = explode(',', $blog->menu);
        $data['menu'] = $menu;

        $blog_interactions = BlogInteraction::where('blog_id' ,$blog->id)->first();
        $blog_interactions->increment('views');

        $data['blog_views'] = $blog_interactions->views;

        return view('front.blog.blog', $data);
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
