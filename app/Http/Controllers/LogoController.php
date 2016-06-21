<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Logo;
use App\ImageLogo;
class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $logo = Logo::all();
      
        return view('admin/pages/logo/list')->with('logo',$logo);

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
        $banner = Logo::find($id);
        $imagelogo=$banner->imageLogo()->get();
        return view('admin/pages/logo/edit')->with('logo',$banner)->with('imagelogo',$imagelogo);
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
       $logo = Logo::find($id);

        $imagelogo = $logo->imagelogo()->get();
        foreach ($imagelogo as $key => $value) {
           $value->delete();
        }
        if($request->input('imagelogo')==null){
           
        }else{
            $imagelogo = $request->input('imagelogo');
            foreach($imagelogo as $key => $value) {
                $image = new ImageLogo;
                $image->link = $value;
                $logo->imageLogo()->save($image);
            }
        }
            return redirect('admin/logo')->with(['success'=>'Sửa thành công']);
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
