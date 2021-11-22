<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::orderBy('id')->get();

        return view('admin/blog/index',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/blog/create');
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
            'title' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([ 'error' => $validator->errors()->all()]);
        }

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->slug = $request->slug;
        $blog->description = $request->description;
        $blog->category_id = $request->category;
        $blog->image = $request->image;
        $blog->thum_image = $request->thum_image;
        $blog->tag = json_encode($request->tag);
        $blog->status = $request->status;
        $blog->user_id = Auth::user()->id;
        $blog->save();

        $url = route('blog.list');
        $msg = 'New Data Added Successfully.';
        return response()->json([ 'success' => $msg,'url'=> $url]);
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
        $blog = Blog::findOrFail($id);
        return view('admin/blog/update',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $blog = Blog::findOrFail($request->id);
        $blog->title = $request->title;
        if (!empty($request->slug)) {
            $blog->slug = $request->slug;
        }
        $blog->description = $request->description;
        $blog->category_id = $request->category;
        if (!empty($request->image)) {
            $blog->image = $request->image;
        }
        if (!empty($request->thum_image)) {
            $blog->thum_image = $request->thum_image;
        }
        $blog->tag = json_encode($request->tag);
        $blog->status = $request->status;
        $blog->update();

        $msg = 'Data Update Successfully.';
        return response()->json([ 'success' => $msg ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return response()->json([ 'data' => 1 ]);
    }
}
