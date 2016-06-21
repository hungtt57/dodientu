<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Banner;
use App\ImageBanner;
class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $banner = Banner::all();
      
        return view('admin/pages/banner/list')->with('banner',$banner);

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
        $banner = Banner::find($id);
        $imagebanner=$banner->imageBanner()->get();
        return view('admin/pages/banner/edit')->with('banner',$banner)->with('imagebanner',$imagebanner);
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
       $banner= Banner::find($id);

        $imagebanner = $banner->imagebanner()->get();
        foreach ($imagebanner as $key => $value) {
           $value->delete();
        }
        if($request->input('imagebanner')==null){
           
        }else{
            $imagebanner = $request->input('imagebanner');
            $link_facebook = $request->input('link_facebook');
            foreach($imagebanner as $key => $value) {
                $image = new ImageBanner;
                $image->link = $value;
                $image->link_facebook = $link_facebook;
                $banner->imageBanner()->save($image);
            }
        }
            return redirect('admin/banner')->with(['success'=>'Sửa thành công']);
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
