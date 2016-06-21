<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blogs;
use App\ImageDetail;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\CheckEditProductRequest;
use Slug;
use DB;
use File;
use Image;
use Session;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $blogs= Blogs::all();
       return view('admin.pages.blog.list',['blogs'=>$blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog=new Blogs;
        $blog->title=$request->input('title');
        $blog->alias=str_slug($request->input('title'),'-');
        $blog->description=$request->input('description');
        $blog->content=$request->input('content');
        $blog->image=$request->input('image');
       
        $blog->save();
        return redirect('/admin/blog/')->with(['flash_message'=>'Tạo thành công']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog=Blogs::find($id);
    return view('admin/pages/blog/show')->with('blog',$blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $blog=Blogs::find($id);
        return view('admin.pages.blog.edit',compact('blog'));
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
        $blog = Blogs::find($id);
        $blog->title=$request->input('title');
        $blog->alias=str_slug($request->input('title'),'-');
        $blog->description=$request->input('description');
        $blog->content=$request->input('content');

        $blog->image=$request->input('image');
        $blog->save();
        return redirect('admin/blog/')->with(['flash_message'=>'Sửa thành công']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $blog=Blogs::find($id);
        $blog->delete();
        return redirect('admin/blog/')->with(['danger'=>'Xóa thành công']);

    }
}
