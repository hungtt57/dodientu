<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CheckBlogRequest;
use DB;
use Sunra\PhpSimple\HtmlDomParser;
use File;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
       $blogs= Blog::all();
    
       return view('admin.pages.blog.index',['blogs'=>$blogs]);
    }
     
    public function create()
    {
       
        return view('admin.pages.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CheckBlogRequest $request)
    {
        $blog=new Blog;
        $blog->title=$request->input('title');
        $blog->description=$request->input('description');
        $blog->content=$request->input('content');
        $anhdaidien=$request->file('image');
        if($anhdaidien){
              $filename = str_slug($blog->title).'.' . $anhdaidien->getClientOriginalExtension();
            $path = public_path().'/image/blog/thumb/' . $filename;
                Image::make($anhdaidien->getRealPath())->resize(380, 210)->save($path);
                $blog->thumb= 'public/image/blog/thumb/' . $filename;

        }
        $blog->save();
        return redirect('/admin/blog/list')->with(['flash_message'=>'Tạo thành công']);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
    $blog=Blog::find($id);
    return view('admin/pages/blog/show')->with('blog',$blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
         
        $blog=Blog::find($id);
        return view('admin.pages.blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $blog->title=$request->input('title');
        $blog->description=$request->input('description');
        $blog->content=$request->input('content');

        $anhdaidien=$request->file('image');
        if($anhdaidien){
              $filename = str_slug($blog->title).'.' . $anhdaidien->getClientOriginalExtension();
            $path = public_path().'/image/blog/thumb/' . $filename;
                Image::make($anhdaidien->getRealPath())->resize(380, 210)->save($path);
                $blog->thumb= 'public/image/blog/thumb/' . $filename;

        }
        $blog->save();
        return redirect('admin/blog/')->with(['flash_message'=>'Sửa thành công']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $blog=blog::find($id);
        File::delete($blog->image);
        $html=HtmlDomParser::str_get_html($blog->content);
        foreach($html->find('img') as $img)
        {
           
           File::delete(substr($img->src,1));
        }
        $blog->delete();
        
        return redirect('admin/blog/')->with(['flash_message'=>'Xóa thành công']);
        
    }
}
