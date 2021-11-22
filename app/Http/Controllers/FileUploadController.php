<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FileUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request){
        $image = $request->file('file');


        $name = uniqid().'.'.$image->extension();
        $path = '/assets/uploads/gallery/';
        $name = uniqid().'.'.$image->extension();
        $image->move(public_path().'/assets/uploads/gallery', $name);

        $gallery = new Gallery ;
        $gallery->image = $name;
        $gallery->path = $path;
        $gallery->save();

        $msg = 'Image uplode Successfully.';
        return response()->json(['success'=>$name]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $gallery = Gallery::orderBy('id', 'DESC')->get();
        return view('admin/gallery/all_image',compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function choose(Request $request)
    {
        $data = array();
        $gallery = array();
        foreach ($request->img as $item) {
            $gallery = Gallery::findOrFail($item);

        }

        $data['image'] ='<img src="'.asset($gallery->path.''.$gallery->image).'" class="galllery-img2" >';
        $data['id'] = $gallery->id;
        $data['extention'] = $gallery->image;
        return response()->json($data);
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
