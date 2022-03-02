<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Menue;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class WebsiteSettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Menue::orderBy('id')->get();

        return view('admin/websiteSettings/index',compact('menu'));
    }

    public function menu_create(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([ 'error' => $validator->errors()->all()]);
        }

        $menu = new Menue();
        $menu->menu = $request->name;
        $menu->url = $request->url;
        $menu->icon = $request->icon;
        $menu->slug = $request->slug;
        $menu->save();

        $page = new Page();
        $page->slug = $request->slug;
        $page->save();

        //$url = route('blog.list');
        $msg = 'New Data Added Successfully.';
        return response()->json([ 'success' => $msg]);
    }

    public function menu_update(Request $request)
    {
        $menu = Menue::findOrFail($request->id);
        $menu->menu = $request->name;
        $menu->url = $request->url;
        $menu->icon = $request->icon;
        $menu->slug = $request->slug;
        $menu->update();


        $msg = 'Data Update Successfully.';
        return response()->json([ 'success' => $msg ]);

    }

    public function status_update(Request $request)
    {

        $menu = Menue::findOrFail($request->id);
        $menu->status = $request->val;
        $menu->update();
        if ($request->val == 1) {
            $msg = 'Successfully active status';
        }else{
            $msg = 'Successfully deactivate status';
        }
        return response()->json([ 'success' => $msg ]);

    }

    public function menu_edit($id){
        $menu = Menue::findOrFail($id);
        return response()->json([ 'data' => $menu ]);
    }

    public function page_edit($slug){
        $page = Page::where('slug',$slug)->first();
        if ($slug == 'home'){
            return view('admin/websiteSettings/home',compact('slug','page'));
        }else{
            $title = $slug;
            return view('admin/websiteSettings/page',compact('title'));
        }
    }

    public function web_logo_update(Request $request){
        $page = Page::findOrFail($request->id);
        $page->logo = $request->logo;
        $page->update();

        $msg = 'Successfully update logo';
        return response()->json([ 'success' => $msg ]);
    }

    public function web_slider_update(Request $request){
        $page = Page::findOrFail($request->id);
        $page->slider_1 = $request->slider_1;
        $page->title = $request->title;
        $page->subtitle = $request->sub_title;
        $page->update();

        $msg = 'Successfully update logo';
        return response()->json([ 'success' => $msg ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function menu_delete($slug)
    {
        $menu = Menue::where('slug',$slug)->first();
        $menu->delete();

        $page = Page::where('slug',$slug)->first();
        $page->delete();

        return response()->json([ 'data' => 1 ]);
    }
}
