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
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'images.*' => 'required|mimes:jpg,jpeg,png,bmp|max:20000',
            ],[
                'images.*.required' => 'Please upload an image',
                'images.*.mimes' => 'Only jpeg,png and bmp images are allowed',
                'images.*.max' => 'Sorry! Maximum allowed size for an image is 20MB',
            ]
        );

        if ($validator->fails()) {
            return response()->json([ 'error' => $validator->errors()->all()]);
        }

        $data = [];
        foreach($request->file('images') as $file)
        {
            $path = '/assets/uploads/gallery/';
            $name = uniqid().'.'.$file->extension();
            $file->move(public_path().'/assets/uploads/gallery', $name);
            $data[]= $name;
        }

        foreach ($data as $datum) {
            $gallery = new Gallery ;
            $gallery->image = $datum;
            $gallery->path = $path;
            $gallery->save();
        }

        $msg = 'Image uplode Successfully.';
        return response()->json([ 'success' => $msg ]);
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
        //
    }
}
